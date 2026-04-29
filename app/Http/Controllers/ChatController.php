<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\MoodLog;

class ChatController extends Controller
{
    public function respond(Request $request)
    {
        $user = Auth::user();
        $message = $request->input('message');

        $moodHistory = "";
        if ($user) {
            $last7Logs = MoodLog::where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->take(7)
                ->get();

            if ($last7Logs->isNotEmpty()) {
                $todayLog = MoodLog::where('user_id', $user->id)
                    ->whereDate('created_at', now()->toDateString())
                    ->latest()
                    ->first();

                $mostCommonMood = MoodLog::where('user_id', $user->id)
                    ->where('created_at', '>=', now()->subDays(30))
                    ->select('mood_label', \DB::raw('count(*) as total'))
                    ->groupBy('mood_label')
                    ->orderByRaw('count(*) desc')
                    ->first();

                $moodHistory .= "\nHere is this user's recent emotional history from their \njournal to help you give personalized responses:\n\n";
                $moodHistory .= "Recent mood logs (last 7 entries):\n";
                
                foreach ($last7Logs as $log) {
                    $moodHistory .= "Date: {$log->created_at->format('Y-m-d')} | Mood: {$log->mood_label} | Stress: {$log->stress_score}/10 | Note: {$log->reflection_note}\n";
                }

                if ($todayLog) {
                    $moodHistory .= "\nToday's mood: {$todayLog->mood_label} with stress level {$todayLog->stress_score}/10\n";
                }

                if ($mostCommonMood && $mostCommonMood->mood_label) {
                    $moodHistory .= "Most common mood this month: {$mostCommonMood->mood_label}\n\n";
                } else {
                    $moodHistory .= "\n";
                }

                $moodHistory .= "Use this context to personalize your responses. If the user \nseems to be in a pattern of high stress, gently acknowledge \nit. If they have been improving, celebrate that with them \nsubtly.";
            }
        }

        $systemPrompt = "You are Sage, a gentle and compassionate mental wellness companion inside the Sanctuary app. Your role is to provide emotional support, not medical diagnosis. Follow these rules:
- Always respond in a warm, calm, unhurried tone
- Keep responses short — 2 to 4 sentences maximum
- If someone seems sad or stressed, first acknowledge their feeling before offering any advice. Never jump straight to solutions.
- Use gentle breathing or grounding suggestions naturally in conversation, not as a lecture
- Occasionally ask one simple follow-up question to show you are listening
- Never use clinical language or bullet point lists
- If someone expresses serious distress or mentions self-harm, respond with warmth and strongly encourage them to speak with a real professional or call a helpline
- Sign off responses with a soft closing like 'I am here with you.' or 'Take your time.'
- Do not mention that you are an AI unless directly asked.
" . $moodHistory;

        $history = session()->get('chat_history', []);

        // Check if old history format (Gemini), clear if so
        if (!empty($history) && isset($history[0]['parts'])) {
            $history = [];
        }

        // Add system prompt to history or update existing
        if (empty($history) || $history[0]['role'] !== 'system') {
            array_unshift($history, ['role' => 'system', 'content' => $systemPrompt]);
        } else {
            $history[0] = ['role' => 'system', 'content' => $systemPrompt];
        }

        // Append user message
        $history[] = ['role' => 'user', 'content' => $message];

        $payload = [
            'model' => 'llama-3.3-70b-versatile',
            'messages' => $history
        ];

        try {
            $apiKey = env('GROQ_API_KEY');
            
            if (empty($apiKey)) {
                return response()->json(['reply' => "I am currently resting because my Groq API key is missing. Please add GROQ_API_KEY to your .env file so we can speak."]);
            }

            $response = Http::withoutVerifying()
                ->timeout(30)
                ->withToken($apiKey)
                ->post("https://api.groq.com/openai/v1/chat/completions", $payload);

            if ($response->successful()) {
                $data = $response->json();
                $replyText = $data['choices'][0]['message']['content'] ?? "I am here with you. Take your time.";

                // Append bot response
                $history[] = ['role' => 'assistant', 'content' => $replyText];

                // Keep only last 10 pairs (20 items) + 1 system prompt
                if (count($history) > 21) {
                    $systemMessage = array_shift($history);
                    $history = array_slice($history, -20);
                    array_unshift($history, $systemMessage);
                }

                session()->put('chat_history', $history);

                return response()->json(['reply' => $replyText]);
            } else {
                \Log::error('Groq API Non-200 Response: ' . $response->body());
            }

            return response()->json(['reply' => "I am having a moment of difficulty connecting. Please take a gentle breath. I will be here when you try again."]);

        } catch (\Exception $e) {
            \Log::error('Groq API Error: ' . $e->getMessage());
            return response()->json(['reply' => "I am having a moment of difficulty connecting. Please take a gentle breath. I will be here when you try again."]);
        }
    }
}

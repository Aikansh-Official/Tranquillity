<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\MoodLog;
use App\Models\Technique;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $todayMood = MoodLog::where('user_id', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->first();

        if ($todayMood) {
            $score = $todayMood->stress_score;
            $techniques = Technique::where('min_stress', '<=', $score)
                ->where('max_stress', '>=', $score)
                ->inRandomOrder()
                ->take(3)
                ->get();

            if ($techniques->isEmpty()) {
                $techniques = Technique::inRandomOrder()->take(3)->get();
            }
        } else {
            $techniques = Technique::inRandomOrder()->take(3)->get();
        }

        return view('dashboard', compact('todayMood', 'techniques'));
    }
}

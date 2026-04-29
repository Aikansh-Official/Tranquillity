<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\MoodLog;

class MoodLogController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'stress_score' => 'required|integer|min:1|max:10',
            'mood_label' => 'nullable|string|max:255',
            'reflection_note' => 'nullable|string',
        ]);

        $validated['user_id'] = Auth::id();

        MoodLog::create($validated);

        return redirect()->route('dashboard')->with('success', 'Your reflection has been saved.');
    }
}

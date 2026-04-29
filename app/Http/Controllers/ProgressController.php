<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\MoodLog;
use Carbon\Carbon;

class ProgressController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        
        $selectedDate = $request->has('date') ? Carbon::parse($request->date) : Carbon::today();
        
        $startOfMonth = $selectedDate->copy()->startOfMonth();
        $endOfMonth = $selectedDate->copy()->endOfMonth();

        $monthLogs = MoodLog::where('user_id', $user->id)
            ->whereBetween('created_at', [$startOfMonth->startOfDay(), $endOfMonth->endOfDay()])
            ->get();

        $selectedLog = $monthLogs->filter(function ($item) use ($selectedDate) {
            return $item->created_at->isSameDay($selectedDate);
        })->last();

        return view('my_progress', compact('monthLogs', 'selectedDate', 'selectedLog', 'startOfMonth', 'endOfMonth'));
    }
}

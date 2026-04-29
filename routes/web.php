<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MoodLogController;
use App\Http\Controllers\ProgressController;

Route::get('/', fn() => redirect()->route('login'));

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/mood/store', [MoodLogController::class, 'store'])->name('mood.store');

    Route::get('/library', [App\Http\Controllers\LibraryController::class, 'index'])->name('library');
    Route::get('/technique/{technique}', [App\Http\Controllers\LibraryController::class, 'show'])->name('technique.show');
    Route::get('/session/{technique}', [App\Http\Controllers\LibraryController::class, 'session'])->name('session');
    Route::get('/progress', [ProgressController::class, 'index'])->name('progress');
    Route::post('/chat/respond', [App\Http\Controllers\ChatController::class, 'respond'])->name('chat.respond')->middleware('throttle:20,1');

    Route::get('/journal', function () {
        return view('daily_journal');
    })->name('journal');

    Route::get('/profile', function () {
        return view('profile.profile');
    })->name('profile.edit');
});


require __DIR__.'/auth.php';

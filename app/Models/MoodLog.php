<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoodLog extends Model
{
    protected $fillable = [
        'user_id',
        'mood_label',
        'stress_score',
        'reflection_note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'duration_mins',
        'min_stress',
        'max_stress',
    ];
}

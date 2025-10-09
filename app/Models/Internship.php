<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
      use HasFactory;

    protected $fillable = [
        'title',
        'skills_required',
        'description',
        'duration',
        'stipend',
        'questions',
    ];

    protected $casts = [
        'questions' => 'array', // Automatically decode/encode JSON
    ];
}

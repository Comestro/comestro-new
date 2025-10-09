<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipApplication extends Model
{
     use HasFactory;

    protected $fillable = [
        'internship_id',
        'name',
        'email',
        'phone',
        'qualification',
        'college',
        'skills',
        'motivation',
        'answers',
        'resume',
    ];

    protected $casts = [
        'answers' => 'array',
    ];

   
    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
}

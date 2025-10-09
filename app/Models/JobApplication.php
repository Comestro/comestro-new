<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
      use HasFactory;

    protected $fillable = [
        'careerjob_id', 'name', 'email', 'phone', 'dob',
        'degree', 'college', 'year', 'percentage', 'experience',
        'previous_company', 'role', 'skills', 'location', 'salary',
        'notice_period', 'resume', 'cover_letter',
    ];

    public function job()
    {
        return $this->belongsTo(Careerjob::class, 'careerjob_id');
    }
    public function careerjob()
{
    return $this->belongsTo(CareerJob::class, 'careerjob_id');
}

}

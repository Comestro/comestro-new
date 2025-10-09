<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Careerjob extends Model
{
   protected $table = 'career_jobs'; 

    protected $fillable = [
        'category_id','title','location','type','salary','posted_at','description','skills'
    ];
    
    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'category_id');
    }
}

<?php

namespace App\Models;

use App\FilterModels\MemberFilter;

class Memeber extends MemberFilter
{
    /**
     * The attributes that are mass asssignable
     * 
     * @return array
     */
    protected $fillable = [
        'name', 'job_title', 'email', 'age', 'address', 'phone', 'resume', 'about', 'image', 'linkedin', 'facebook'
    ];
    
    
}

<?php

namespace App\Models\Preview;

use Illuminate\Database\Eloquent\Model;
use App\FilterModels\CustomerFilter;

class Customer extends CustomerFilter
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'comment', 'image', 'job',
    ];
}

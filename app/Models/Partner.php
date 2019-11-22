<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\FilterModels\PartnerFilter;

class Partner extends PartnerFilter
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'url', 'description', 'image',
    ];
}

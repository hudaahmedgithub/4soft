<?php

namespace App\Models;

use App\Helpers\SamirzValidator;
use Illuminate\Database\Eloquent\Model;
use App\FilterModels\ContactFilter;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends ContactFilter
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'subject', 'message', 'type', 'favourite',
    ];
}

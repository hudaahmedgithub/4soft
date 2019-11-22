<?php

namespace App\Models;

use App\FilterModels\SettingFilter;

class Setting extends SettingFilter
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['key', 'value'];

}

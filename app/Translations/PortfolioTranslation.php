<?php

namespace App\Translations;

use Illuminate\Database\Eloquent\Model;

class PortfolioTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'description'];
}

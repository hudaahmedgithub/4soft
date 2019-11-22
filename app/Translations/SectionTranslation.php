<?php

namespace App\Translations;

use Illuminate\Database\Eloquent\Model;

class SectionTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['description', 'heading', 'sub_heading', 'text'];
}

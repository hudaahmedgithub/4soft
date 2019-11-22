<?php

namespace App\Models;

use App\FilterModels\SectionFilter;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Section extends SectionFilter implements TranslatableContract
{
    use Translatable;

    /**
     * The Attributes that will be translated by the locals
     *
     * @var array
     */
    public $translatedAttributes = ['description', 'heading', 'sub_heading', 'text'];

    /**
     * The Translation Model that translates the translated attributes
     *
     * @var string
     */
    public $translationModel = 'App\Translations\SectionTranslation';

    /**
     * The Attributes that are mass assignable
     * 
     * @return array
     */
    protected $fillable = [
        'name', 'link', 'has_button', 'icon'
    ];
}

<?php

namespace App\Models;

use App\Helpers\SamirzImage;
use App\Helpers\SamirzValidator;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;


class Portfolio extends Model implements TranslatableContract
{
    use Translatable;

    /**
     * The Attributes that will be translated by the locals
     *
     * @var array
     */
    public $translatedAttributes = ['name', 'description'];

    /**
     * The Translation Model that translates the translated attributes
     *
     * @var string
     */
    public $translationModel = 'App\Translations\PortfolioTranslation';

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'link', 'type'
    ];

    /**
     * Set the Service's Name
     *
     * @param  string $value
     * @return string
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Service's Name
     *
     * @param  string $value
     * @return string
     */
    public function setLinkAttribute($value)
    {
        $this->attributes['link'] = SamirzValidator::sanitizeUrl($value)[0];
    }

    /**
     * Set the Service's Description
     *
     * @param  string $value
     * @return string
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = htmlentities($value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Set the Service's Logo
     *
     * @param  string $value
     * @return string
     */
    public function setImageAttribute($value)
    {
        $uplPath = 'public/portfolios';

        if ($value != null) {

            $oldImage = $this->image;

            # Update the old image and put instead of it the new image
            $image = SamirzImage::uploadImage($value, $uplPath, true, $oldImage);

        } else {

            $image = $this->image;;
        }

        # Put the retuened path on the image attribute
        $this->attributes['image'] = $image ?? NULL;
    }


}

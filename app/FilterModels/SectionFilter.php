<?php

namespace App\FilterModels;

use App\Helpers\SamirzValidator;
use Illuminate\Database\Eloquent\Model;

class SectionFilter extends Model
{
    /**
     * Set the Section's Heading
     *
     * @param  string $value
     * @return string
     */
    public function setHeadingAttribute($value)
    {
        $this->attributes['heading'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Section's Heading
     *
     * @param  string $value
     * @return string
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Section's Sub Heading
     *
     * @param  string $value
     * @return string
     */
    public function setSubHeadingAttribute($value)
    {
        $this->attributes['sub_heading'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Section's Heading
     *
     * @param  string $value
     * @return string
     */
    public function setLinkAttribute($value)
    {
        $this->attributes['link'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Section's Heading
     *
     * @param  string $value
     * @return string
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Section's Heading
     *
     * @param  string $value
     * @return string
     */
    public function setHasButtonAttribute($value)
    {
        $this->attributes['has_button'] = SamirzValidator::sanitizeString($value)[0];
    }
    
    /**
     * Set the Section's Heading
     *
     * @param  string $value
     * @return string
     */
    public function setHasIconAttribute($value)
    {
        $this->attributes['icon'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Section's Heading
     *
     * @param  string $value
     * @return string
     */
    public function setHasTextAttribute($value)
    {
        $this->attributes['text'] = SamirzValidator::sanitizeString($value)[0];
    }
}
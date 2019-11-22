<?php

namespace App\FilterModels;

use App\Helpers\SamirzValidator;
use App\Helpers\SamirzImage;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ContactFilter extends Model
{ 
    /**
     * Set the Contact's Name
     *
     * @param  string $value
     * @return string
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Contact's Email
     *
     * @param  string $value
     * @return string
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = SamirzValidator::sanitizeEmail($value)[0];
    }


    /**
     * Set the Contact's Subject
     *
     * @param  string $value
     * @return string
     */
    public function setSubjectAttribute($value)
    {
        $this->attributes['subject'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Contact's Message
     *
     * @param  string $value
     * @return string
     */
    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = htmlentities($value, ENT_QUOTES, 'UTF-8');
    }

}
<?php

namespace App\FilterModels;

use App\Helpers\SamirzImage;
use App\Helpers\SamirzValidator;
use App\FilterModels\FilterModel;

class SettingFilter extends FilterModel
{
    /**
     * Get the Settings' About
     *
     * @return string
     */
    public function getAboutAttribute($value)
    {
        return html_entity_decode($value);
    }

    /**
      * Set the Company's About
      *
      * @param  string $value
      * @return string
      */
      public function setAboutAttribute($value)
      {
          $this->attributes['about'] = htmlentities($value, ENT_QUOTES, 'UTF-8');
      }
 
     /**
      * Set the Company's Name
      *
      * @param  string $value
      * @return string
      */
     public function setNameAttribute($value)
     {
         $this->attributes['name'] = SamirzValidator::sanitizeString($value)[0];
     }
 
     /**
      * Set the Company's Email
      *
      * @param  string $value
      * @return string
      */
     public function setEmailAttribute($value)
     {
         $this->attributes['email'] = SamirzValidator::sanitizeEmail($value)[0];
     }
 
     /**
      * Set the Company's Address
      *
      * @param  string $value
      * @return string
      */
     public function setAddressAttribute($value)
     {
         $this->attributes['address'] = SamirzValidator::sanitizeString($value)[0];
     }
 
     /**
      * Set the Company's Logo
      *
      * @param  string $value
      * @return string
      */
     public function setLogoAttribute($value)
     {
         $uplPath = 'public/logo';
         
         # Get the count row in settings table
         $count = $this->all()->count();
 
         if ($count > 0) {
             # Get the last order in the table
             $settings = $this->orderBy('id', 'desc')->first();
             
             $oldImage = $settings->logo;
             # Update remove the old image and put instead of it the new image
             $logo = SamirzImage::uploadImage($value, $uplPath, true, $oldImage);
 
         } else {
             # Upload the image to the selected path
             $logo = SamirzImage::uploadImage($value, $uplPath);
         }
 
         # Put the retuened path on the logo attribute
         $this->attributes['logo'] = $logo ?? NULL;
     }
 
     /**
      * Set the Company's Facebook Url
      *
      * @param  string $value
      * @return string
      */
     public function setFacebookAttribute($value)
     {
         $this->attributes['facebook'] = SamirzValidator::sanitizeUrl($value)[0];
     }
 
     /**
      * Set the Company's Twitter Url
      *
      * @param  string $value
      * @return string
      */
     public function setTwitterAttribute($value)
     {
         $this->attributes['twitter'] = SamirzValidator::sanitizeUrl($value)[0];
     }
 
     /**
      * Set the Company's Linkedin Url
      *
      * @param  string $value
      * @return string
      */
     public function setLinkedinAttribute($value)
     {
         $this->attributes['linkedin'] = SamirzValidator::sanitizeUrl($value)[0];
     }
}
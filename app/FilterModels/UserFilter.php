<?php

namespace App\FilterModels;

use App\Helpers\SamirzValidator;
use App\Helpers\SamirzImage;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserFilter extends Authenticatable
{
    /**
     * Set the user's password
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

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
     * Set the memeber's addrss
     * 
     * @param  string $value
     * @return string
     */
    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the member's phone
     * 
     * @param  int $value
     * @return int
     */
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = $value;
    }

    /**
     * Set the memeber's about
     * 
     * @param  string $value
     * @return string
     */
    public function setAboutAttribute($value)
    {
        $this->attributes['about'] = htmlentities($value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Set the memeber's about
     * 
     * @param  string $value
     * @return string
     */

    /**
     * Set the member's image
     * 
     * @param  object $value
     * @return string
     */
    public function setImageAttribute($value)
    {
        $request = Request();
        $uplPath = 'public/users/image';
        
        if($request->method() == 'PUT') {
            # Get the old image to update it
            $oldImage = $this->image;
            # Update remove the old image and put instead of it the new image
            $image = SamirzImage::uploadImage($value, $uplPath, true, $oldImage);
        }
        
        if($request->method() == 'POST') {
            # Upload the image to the selected path
            $image = SamirzImage::uploadImage($value, $uplPath);
        }

        # Put the retuened path on the logo attribute
        $this->attributes['image'] = $image ?? NULL;
    }
}
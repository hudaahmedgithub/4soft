<?php

namespace App\FilterModels;

use App\Helpers\SamirzValidator;
use App\Helpers\SamirzImage;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class MemberFilter extends Model
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
     * Set the Contact's Name
     *
     * @param  string $value
     * @return string
     */
    public function setJobTitleAttribute($value)
    {
        $this->attributes['job_title'] = SamirzValidator::sanitizeString($value)[0];
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
     * Set the memeber's age
     * 
     * @param  float $value
     * @return float
     */
    public function setAgeAttribute($value)
    {
        $this->attributes['age'] = SamirzValidator::sanitizeFloat($value)[0];
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
     * Set the member's image
     * 
     * @param  object $value
     * @return string
     */
    public function setImageAttribute($value)
    {
        $request = Request();
        $uplPath = 'public/members/image';
        
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

    /**
     * Set the member's resume 
     * 
     * @param  object $value
     * @return string
     */
    public function setResumeAttribute($value)
    {
        $request = Request();
        $uplPath = 'public/members/resume';

        if($request->method() == 'PUT') {
            # Get the old image to update it
            $oldFile = $this->resume;
            # Update remove the old resume and put instead of it the new resume
            $resume = SamirzImage::uploadFile($value, $uplPath, 'resume', true, $oldFile);
        }
        
        if($request->method() == 'POST') {
            # Upload the resume to the selected path
            $resume = SamirzImage::uploadFile($value, $uplPath, 'resume');
        }

        # Put the retuened path on the logo attribute
        $this->attributes['resume'] = $resume ?? NULL;
    }

    /**
     * Set the member's facebook
     * 
     * @param  string $value
     * @return string
     */
    public function setFacebookAttribute($value)
    {
        $this->attributes['facebook'] = SamirzValidator::sanitizeUrl($value)[0];
    }

    /**
     * Set the member's linkedin
     * 
     * @param  string $value
     * @return string
     */
    public function setLinkedinAttribute($value)
    {
        $this->attributes['linkedin'] = SamirzValidator::sanitizeUrl($value)[0];
    }
}
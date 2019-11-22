<?php

namespace App\FilterModels;

use App\Helpers\SamirzValidator;
use App\Helpers\SamirzImage;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class CustomerFilter extends Model
{
    /**
     * Set the partner's Name
     *
     * @param  string $value
     * @return string
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the partner's Name
     *
     * @param  string $value
     * @return string
     */
    public function setJobAttribute($value)
    {
        $this->attributes['job'] = SamirzValidator::sanitizeString($value)[0];
    }


    /**
     * Set the partner's description
     * 
     * @param  string $value
     * @return string
     */
    public function setCommentAttribute($value)
    {
        $this->attributes['comment'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the partner's image
     * 
     * @param  object $value
     * @return string
     */
    public function setImageAttribute($value)
    {
        $request = Request();
        $uplPath = 'public/customers/image';
        
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
<?php

namespace App\Http\Requests\Backend\Partners;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequestPUT extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'          => 'bail|required|string|max:120',
            'url'           => 'bail|required|string',
            'description'   => 'bail|required|string',
        ];
        
        if($this->attributes->has('image'))
            $rules['image'] = 'bail|required|mimes:jpeg,png,jpg|max:5000';

        return $rules;
    }
}

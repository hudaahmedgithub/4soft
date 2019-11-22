<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
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
        return [
            'facebook'  => 'url',
            'twitter'   => 'url',
            'linkedin'  => 'url'
        ];
    }

    /**
     * Get the error messages for the defined validation rules
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'facebook.url'      => __('settings.url'),
            'twitter.url'       => __('settings.url'),
            'linkedin.url'      => __('settings.url'),
        ];
    }
}

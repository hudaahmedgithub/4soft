<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'ar.*'     => 'bail|required|string',
            'logo'      => 'bail|image|max:5000'
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
            'about.required'    => __('settings.about_required'),
            'about.string'      => __('settings.about_string'),
            'logo.image'        => __('settings.logo_image'),
            'logo.max'          => __('settings.logo_max_5000'),
        ];
    }
}

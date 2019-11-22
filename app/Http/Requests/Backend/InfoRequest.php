<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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

        ];
        /* return [
            'ar.*' => 'required',
        ]; */
    }

    /**
     * Get the error messages for the defined validation rules
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'     => __('settings.name_required'),
            'name.string'       => __('settings.name_string'),
            'name.min'          => __('settings.name_min_3'),
            'name.max'          => __('settings.name_max_100'),
            'phone.required'    => __('settings.phone_required'),
            'phone.digits'      => __('settings.phone_digits_11'),
            'email.required'    => __('settings.email_required'),
            'email.email'       => __('settings.email_email'),
            'email.max'         => __('settings.email_max_255'),
            'address.required'  => __('settings.address_required'),
            'address.string'    => __('settings.address_string'),
            'address.min'       => __('settings.address_min_3'),
            'address.max'       => __('settings.address_max_255'),
        ];
    }
}

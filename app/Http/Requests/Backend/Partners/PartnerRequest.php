<?php

namespace App\Http\Requests\Backend\Partners;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'name'          => 'bail|required|string|max:120',
            'url'           => 'bail|required|string',
            'description'   => 'bail|required|string',
            'image'         => 'bail|required|mimes:jpeg,png,jpg|max:5000',
        ];
    }
}

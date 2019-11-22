<?php

namespace App\Http\Requests\Backend\Members;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name'      => 'bail|required|string|max:120',
            'email'     => 'bail|required|email|max:100',
            'age'       => 'bail|nullable|numeric',
            'address'   => 'bail|required|string|max:255',
            'phone'     => 'bail|nullable|digits:11',
            'about'     => 'bail|required|string',
            'linkedin'  => 'bail|required|string|max:255',
            'facebook'  => 'bail|required|string|max:255',
            'image'     => 'bail|required|mimes:jpeg,png,jpg|max:5000',
            'resume'    => 'bail|mimes:pdf|max:5000'
        ];
    }
}

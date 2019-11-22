<?php

namespace App\Http\Requests\Backend\Sections;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
            'name' => 'required|string|max:100',
        ];

        if ($this->attributes->get('has_button') == 'yes') {
            $rules['icon'] = 'bail|required|string|max:50';
            $rules['text'] = 'bail|required|string|max:50';
        }

        return $rules;
    }
}

<?php

namespace App\Http\Requests\Backend\Sections;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequestPut extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'heading' => 'bail|required|string|max:100',
            'sub_heading' => 'bail|nullable|string|max:255',
            'link' => 'bail|required|string|max:50',
            'description' => 'bail|nullable|string',
        ];

        if ($this->attributes->get('has_button') == 'yes') {
            $rules['icon'] = 'bail|required|string|max:50';
            $rules['text'] = 'bail|required|string|max:50';
        }

        return $rules;
    }
}

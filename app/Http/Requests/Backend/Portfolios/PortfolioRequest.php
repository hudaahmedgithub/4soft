<?php

namespace App\Http\Requests\Backend\Portfolios;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'link'          => 'bail|required|string',
            'type'          => 'bail|required|string',
            'description'   => 'bail|required|string',
            'image'         => 'bail|required|mimes:jpeg,png,jpg,webp,gif|max:5000',
        ];
    }
}

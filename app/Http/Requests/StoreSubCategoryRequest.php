<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Validation\Rule;

class StoreSubCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required'
            ],

            'code' => [
                'required',
                'min:2',
                'max:8',
                'alpha_num',
                Rule::unique('sub_categories', 'code')
            ],

            'is_active' => [
                'required',
                'boolean'
            ]
        ];
    }
}

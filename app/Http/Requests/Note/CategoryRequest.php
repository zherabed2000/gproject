<?php

namespace App\Http\Requests\Note;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'color' => 'required',
            'title' => 'required|string',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'color.required' => 'Color is required',

            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',

            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',
        ];
    }
}

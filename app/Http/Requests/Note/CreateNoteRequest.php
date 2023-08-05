<?php

namespace App\Http\Requests\Note;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteRequest extends FormRequest
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
            'name' => 'required|string',
            'category_id' => 'required|numeric',
            'content' => 'required|string',
            'color' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',

            'category_id.required' => 'Category is required',

            'content.required' => 'Content is required',
            'content.string' => 'Content must be a string'
        ];
    }
}

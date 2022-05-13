<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvSaveRequest extends FormRequest
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
            'file' => 'required|dimensions:width=800,height=800',
            'category' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'file.required' => 'The file has invalid image dimensions!please use 800x800',
        ];
    }
}

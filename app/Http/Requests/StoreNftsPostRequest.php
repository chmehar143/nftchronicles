<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNftsPostRequest extends FormRequest
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
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'contact_email' => 'required|email',
            'contact_name' => 'required|string|max:50',
            'nft_name' => 'required'
        ];
    }

//    public function messages()
//    {
//        return [
//            'file.required' => 'Email is required!',
//            'email.required' => 'Email is required!',
//            'name.required' => 'Name is required!',
//            'password.required' => 'Password is required!'
//        ];
//    }
}

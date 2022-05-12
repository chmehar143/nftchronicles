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
            'file' => 'required|dimensions:width=800,height=800',
            'contact_email' => 'required|email',
            'contact_name' => 'required|string',
            'nft_name' => 'required',
            'nft_description' => 'required',
            'pre_sale_price' => 'required',
            'public_sale_price' => 'required',
            'supply' => 'required',
            'blockchain' => 'required',
            'discord_link' => 'required',
            'category' => 'required',
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

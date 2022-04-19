<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NftEditRequest extends FormRequest
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
}

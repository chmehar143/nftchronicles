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
            'file' => 'required',
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

    public function messages()
    {
        return [
            'file.required' => 'File must be required',
            'contact_name.required' => 'Contact Name must be required',
            'nft_name.required' => 'NFT Name must be required',
            'nft_description.required' => 'NFT Description must be required',
            'pre_sale_price.required' => 'Pre Sale Price must be required',
            'public_sale_price.required' => 'Public Sale Price must be required',
            'supply.required' => 'Supply must be required',
            'blockchain.required' => 'Blockchain  must be required',
            'discord_link.required' => 'Discord must be required',
            'category.required' => 'Category must be required',
        ];
    }
}

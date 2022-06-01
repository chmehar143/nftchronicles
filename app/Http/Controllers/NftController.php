<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nfts;
use App\Http\Requests\StoreNftsPostRequest;

class NftController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public  function  insert(StoreNftsPostRequest  $request)
    {
        //dd($request->all());
        $file_path = '';
        if ($request->hasFile('file')) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
        }
        $nft = Nfts::create([
            'file_path' => $file_path,
            'contact_name'=> $request->contact_name,
            'contact_email'=> $request->contact_email,
            'nft_name'=> $request->nft_name,
            'nft_description'=> $request->nft_description,
            'pre_sale_price'=> $request->pre_sale_price,
            'public_sale_price'=> $request->public_sale_price,
            'pre_sale_date'=>$request->pre_sale_date,
            'public_sale_date'=>$request->public_sale_date,
            'supply'=> $request->supply,
            'blockchain'=> $request->blockchain,
            'marketplace'=> $request->marketplace,
            'marketplace_url'=> $request->marketplace_url,
            'discord_link'=> $request->discord_link,
            'twitter_link'=> $request->twitter_link,
            'website'=> $request->website,
            'source'=> $request->source,
            'traits_count'=> $request->traits_count,
            'contract'=> $request->contract,
            'instagram_link'=> $request->instagram_link,
            'category'=> $request->category,
            'insert_side'=> 'user'
        ]);

        if ($nft) {
            return response()->json(['success'=>'Your Nft have been successfully submit.After review and confirmation you can get the notification Email']);
        }
    }


}

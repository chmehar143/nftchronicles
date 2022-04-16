<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNftsPostRequest;
use App\Models\Nfts;
use Illuminate\Http\Request;

class NftController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    public  function  list()
    {
        $nfts = Nfts::get();
        return view('admin.nft.list',compact('nfts'));
    }

    public  function  create()
    {
        return view('admin.nft.create');
    }

    public  function  edit()
    {
        return view('admin.nft.edit');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $nft = Nfts::find($id);
        return view('admin.nft.view',compact('nft'));
    }


    public  function  save(StoreNftsPostRequest  $request)
    {
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
            'insert_side'=> 'admin',
            'status' => 1
        ]);

        if ($nft) {
            return redirect()->route('admin.nftlist');
        }
    }
}

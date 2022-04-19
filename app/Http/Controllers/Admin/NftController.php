<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNftsPostRequest;
use App\Http\Requests\NftEditRequest;
use App\Models\Nfts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public  function  edit($id)
    {
        $nft = Nfts::find($id);
        return view('admin.nft.edit',compact('nft'));
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
            'insert_side'=> 'admin',
            'status' => 1
        ]);

        if ($nft) {
            return redirect()->route('admin.nftlist');
        }
    }
    public  function  destroy($id){
        Nfts::where('id',$id)->delete();
        return redirect()->back();
    }
    public  function  update(NftEditRequest  $request)
    {
        $nft = Nfts::find($request->id);
        if ($request->hasFile('file')) {

            //code for remove old file
            if($nft->file_path != ''  && $nft->file_path != null){
                $path = public_path().$nft->file_path;
                File::delete($path);
            }
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $nft->update(['file_path' => $file_path]);
        }
        $nft->update([
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
            'insert_side'=> 'admin',
            'status' => 1
        ]);
        $nft->save();

        if ($nft) {
            return redirect()->route('admin.nftlist');
        }
    }
}

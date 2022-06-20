<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GiveawaySaveRequest;
use App\Models\Giveaway;
use App\Models\Marketplace;
use Illuminate\Http\Request;

class MarketController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    public  function  create()
    {
        return view('admin.market.create');
    }


    public  function  list()
    {
        $marketplaces = Marketplace::get();
        return view('admin.market.list',compact('marketplaces'));
    }

    public  function  destroy($id){
        Marketplace::where('id',$id)->delete();
        return redirect()->back();
    }

    public  function  edit($id)
    {
        $market = Marketplace::find($id);
        return view('admin.giveaway.edit',compact('market'));
    }

    public  function save(Request  $request)
    {
        $file_path = '';
        if ($request->hasFile('file')) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('marketplace', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
        }
        $market = Marketplace::create([
            'file_path' => $file_path,
            'title'=> $request->title,
            'description'=> $request->description,
            'website_link'=> $request->website_link,
            'instagram_link'=> $request->instagram_link,
            'twitter_link'=> $request->twitter_link,
            'twitter_follower'=>$request->twitter_follower,
            'instagram_follower'=>$request->instagram_follower
        ]);

        if ($market) {
            return redirect()->route('admin.marketlist');
        }
    }

    public  function  update(Request  $request)
    {
        $market = Marketplace::find($request->id);
        if ($request->hasFile('file')) {

            //code for remove old file
            if($market->file_path != ''  && $market->file_path != null){
                $path = public_path().$market->file_path;
                File::delete($path);
            }
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('marketplace', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $market->update(['file_path' => $file_path]);
        }
        $market->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'website_link'=> $request->website_link,
            'instagram_link'=> $request->instagram_link,
            'twitter_link'=> $request->twitter_link,
            'twitter_follower'=>$request->twitter_follower,
            'instagram_follower'=>$request->instagram_follower
        ]);
        $market->save();

        if ($market) {
            return redirect()->route('admin.marketlist');
        }
    }
}

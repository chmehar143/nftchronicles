<?php

namespace App\Http\Controllers;


use App\Models\Nfts;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CollectionController extends Controller
{
    public function index()
    {
        $nfts = Nfts::where('status',1)->paginate(8);
         return view('collection',compact('nfts'));
    }

    public function show($id)
    {
        $nft = Nfts::find($id);
        $nft->update([
            'most_view_nft' => $nft->most_view_nft+1
        ]);
        $nft->save();
        return view('item-details',compact('nft'));
    }

    public  function  today()
    {
        $nfts = Nfts::where('status',1)->where('public_sale_date',Carbon::today())->paginate(8);
        return view('today',compact('nfts'));
    }

    public  function  newest()
    {
        $date = Carbon::now()->subDays(7);
        $nfts = Nfts::where('status',1)->where('public_sale_date','>', $date)->paginate(8);
        return view('newest',compact('nfts'));
    }


    public  function  upcoming()
    {
        $nfts = Nfts::where('status',1)->where('public_sale_date','>',Carbon::today())->paginate(8);
        return view('upcoming',compact('nfts'));
    }


    public  function  ongoing()
    {
        $nfts = Nfts::where('status',1)->where('public_sale_date','<',Carbon::today())->paginate(8);
        return view('ongoing',compact('nfts'));
    }

    public function search(Request  $request)
    {
        $search = $request->search;
        $nfts = Nfts::where('status',1)
            ->where('nft_name', 'LIKE', '%'.$search.'%')
            ->orWhere('nft_description', 'LIKE', '%'.$search.'%')
            ->paginate(8);
        return view('collection',compact('nfts'));

    }

    public  function  features()
    {
        $nfts = Nfts::where('status',1)->where('show_feature_post',1)->paginate(8);
        return view('collection',compact('nfts'));
    }

}

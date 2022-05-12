<?php

namespace App\Http\Controllers;

use App\Models\News;
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

}

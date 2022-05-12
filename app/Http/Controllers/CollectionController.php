<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Nfts;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $nfts = Nfts::where('status',1)->paginate(1);
         return view('collection',compact('nfts'));
    }

    public function show($id)
    {
        $nft = Nfts::find($id);
        return view('item-details',compact('nft'));
    }

    public  function  today()
    {
        $nfts = Nfts::where('status',1)->paginate(1);
        return view('today',compact('nfts'));
    }

    public  function  newest()
    {
        $nfts = Nfts::where('status',1)->paginate(1);
        return view('newest',compact('nfts'));
    }


    public  function  upcoming()
    {
        $nfts = Nfts::where('status',1)->paginate(1);
        return view('upcoming',compact('nfts'));
    }


    public  function  ongoing()
    {
        $nfts = Nfts::where('status',1)->paginate(1);
        return view('ongoing',compact('nfts'));
    }

}

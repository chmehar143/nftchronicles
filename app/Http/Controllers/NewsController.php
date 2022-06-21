<?php

namespace App\Http\Controllers;

use App\Models\Advirtisement;
use App\Models\News;
use App\Models\Nfts;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newFirst = News::first();
        $newFour = News::skip(1)->take(4)->get();
        $news = News::where('category', 'Simple News')->paginate(6);
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(6)->get();
//        $pnews = News::where('category', 'Popular Post')->take(3)->get();
        return view('blog',compact('news','advirtisements','newFirst','newFour'));
    }

    public function show($id)
    {
        $new = News::find($id);
        return view('blog-details',compact('new'));
    }


    public function search(Request  $request)
    {
        $search = $request->search;
        $news = News::where('heading', 'LIKE', '%'.$search.'%')
            ->orWhere('description', 'LIKE', '%'.$search.'%')
            ->paginate(8);
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(6)->get();
        return view('blog-search',compact('news','advirtisements'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Advirtisement;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('category', 'Simple News')->paginate(15);
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(3)->get();
        $pnews = News::where('category', 'Popular Post')->take(3)->get();
        return view('blog',compact('news','pnews','advirtisements'));
    }

    public function show($id)
    {
        $new = News::find($id);
        return view('blog-details',compact('new'));
    }
}

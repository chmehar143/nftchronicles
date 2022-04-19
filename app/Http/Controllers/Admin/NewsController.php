<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Nfts;

use Illuminate\Http\Request;

class NewsController extends Controller
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

        return view('admin.news.list',compact('nfts'));

    }

    public  function  create()
    {
        return view('admin.news.create');
    }

    public  function  edit()
    {
        return view('admin.news.edit');
    }

    public  function  view()
    {
        return view('admin.news.view');
    }
}

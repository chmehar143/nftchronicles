<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Nfts;

use Illuminate\Http\Request;

class FaqsController extends Controller
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

        return view('admin.faqs.list',compact('nfts'));

    }

    public  function  create()
    {
        return view('admin.faqs.create');
    }

    public  function  edit()
    {
        return view('admin.faqs.edit');
    }

    public  function  view()
    {
        return view('admin.faqs.view');
    }
}

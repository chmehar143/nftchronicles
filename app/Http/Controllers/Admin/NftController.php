<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.nft.list');
    }

    public  function  create()
    {
        return view('admin.nft.create');
    }

    public  function  edit()
    {
        return view('admin.nft.edit');
    }

    public  function  view()
    {
        return view('admin.nft.view');
    }
}

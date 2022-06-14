<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advirtisement;
use Illuminate\Http\Request;

class GiveawayController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    public  function  create()
    {
        return view('admin.giveaway.create');
    }


    public  function  list()
    {
        $advirtisements = Advirtisement::get();
        return view('admin.giveaway.list',compact('advirtisements'));

    }
}

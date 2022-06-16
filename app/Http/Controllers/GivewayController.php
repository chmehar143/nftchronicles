<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GivewayController extends Controller
{
    public function index()
    {
        return view('nft-giveway');
    }
}

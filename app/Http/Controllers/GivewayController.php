<?php

namespace App\Http\Controllers;

use App\Models\Giveaway;
use Illuminate\Http\Request;

class GivewayController extends Controller
{
    public function index()
    {
        $giveaway = Giveaway::all();
        return view('nft-giveway',compact('giveaway'));
    }
}

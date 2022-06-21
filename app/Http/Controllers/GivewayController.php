<?php

namespace App\Http\Controllers;

use App\Models\Giveaway;
use Illuminate\Http\Request;

class GivewayController extends Controller
{
    public function index()
    {
        $giveaways = Giveaway::paginate(8);
        return view('nft-giveway',compact('giveaways'));
    }
}

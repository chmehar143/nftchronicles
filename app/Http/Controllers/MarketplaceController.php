<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index()
    {
        $marketplace = Marketplace::all();
        return view('Nft-Marketplace',compact('marketplace'));
    }
}

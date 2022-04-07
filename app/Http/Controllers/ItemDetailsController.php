<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemDetailsController extends Controller
{
    public function index()
    {
        return view('item-details');
    }
}

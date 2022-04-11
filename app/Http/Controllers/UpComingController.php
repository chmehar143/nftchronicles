<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpComingController extends Controller
{
    public function index()
    {
        return view('upcoming');
    }
}

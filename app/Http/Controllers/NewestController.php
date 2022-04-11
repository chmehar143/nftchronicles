<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewestController extends Controller
{
    public function index()
    {
        return view('newest');
    }
}

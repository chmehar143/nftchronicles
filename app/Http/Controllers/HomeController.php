<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nfts;
use App\Models\News;
use App\Models\Advirtisement;

class HomeController extends Controller
{
  public  function  index()
  {
      $advirtisements = Advirtisement::where('show_home_page', 1)
          ->where('category', 'advertisement')->take(3)->get();
      return view('welcome',compact('advirtisements'));
  }
}

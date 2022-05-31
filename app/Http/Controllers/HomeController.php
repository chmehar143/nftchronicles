<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
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
      $banners = Advirtisement::where('show_home_page', 1)
          ->where('category', 'banner')->take(1)->get();
      $faqs = Faqs::where('show_home_page', 0)->take(4)->get();
      $news = News::where('show_home_page', 1)->take(5)->get();
      $nfts = Nfts::where('show_home_page', 1)->orWhere('show_feature_post', 1)->orderBy('pre_sale_date', 'DESC')->take(8)->get();
      return view('welcome',compact('advirtisements','banners','faqs','news','nfts'));
  }
}

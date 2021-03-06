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
          ->where('category', 'advertisement')->take(6)->get();
      $banners = Advirtisement::where('show_home_page', 1)
          ->where('category', 'banner')->take(1)->get();
      $faqs = Faqs::where('show_home_page', 0)->take(4)->get();
      $snews = News::where('show_home_page', 1)->where('category', 'Simple News')->take(6)->get();
      $news = News::where('show_home_page', 1)->where('category', 'Popular Post')->take(5)->get();
      $nfts = Nfts::where('show_home_page', 1)->orWhere('show_feature_post', 1)->orderBy('pre_sale_date', 'DESC')->take(8)->get();
      $sponnfts = Nfts::where('is_sponsored_post', 1)->take(5)->get();
      return view('welcome',compact('advirtisements','banners','faqs','news','nfts','snews','sponnfts'));
  }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Nfts;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $role = Auth::guard('admin')->user()->role;
        if($role == 'super admin') {
            return view('admin.home');
        }elseif ($role == 'admin')
        {
            $nfts = Nfts::get();
            return view('admin.nft.list',compact('nfts'));
        }elseif ($role == 'user'){
            $news = News::get();
            return view('admin.news.list',compact('news'));
        }
    }
}

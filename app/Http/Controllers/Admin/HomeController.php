<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Nfts;
use Illuminate\Support\Facades\Auth;
use DB;

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
            $sponsored_post = Nfts::whereMonth('updated_at', date('m'))->where('is_sponsored_post','=','1')->count();
            $user_nft = Nfts::whereMonth('updated_at', date('m'))->where('insert_side','=','user')->count();
            $feature_post = Nfts::whereMonth('updated_at', date('m'))->where('show_feature_post','=','1')->count();
            $month_wise_count = [];
            $month = [];
            $items = Nfts::select(
                DB::raw("(COUNT(*)) as count"),
                DB::raw("MONTHNAME(created_at) as month_name")
            )
                ->whereYear('created_at', date('Y'))
                ->where('status', 1)
                ->groupBy('month_name')
                ->get()
                ->toArray();
            foreach ($items as $data){
                $month_wise_count[] = $data['count'];
                $month[] = $data['month_name'];
            }
            $sponsored_nft = Nfts::where('is_sponsored_post','=','1')->where('status', 1)->count();
            $simple_nft = Nfts::where('is_sponsored_post','=','0')->where('show_feature_post','=','0')->where('status', 1)->count();
            $feature_nft = Nfts::where('show_feature_post','=','1')->where('status', 1)->count();
            $top_view = Nfts::orderBy('most_view_nft', 'DESC')->take(10)->get();
            return view('admin.home',compact('sponsored_post','user_nft','feature_post','month_wise_count','month','sponsored_nft','simple_nft','feature_nft','top_view'));
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

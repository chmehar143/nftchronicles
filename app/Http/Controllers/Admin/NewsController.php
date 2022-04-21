<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNftsPostRequest;
use App\Http\Requests\NewsSaveRequest;
use App\Models\News;
use App\Models\Nfts;

use Illuminate\Http\Request;

class NewsController extends Controller
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

    public  function  list()
    {
        $news = News::get();
        return view('admin.news.list',compact('news'));

    }

    public  function  save(NewsSaveRequest  $request)
    {
        $file_path = '';
        if ($request->hasFile('file')) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
        }
        $new = News::create([
            'file_path' => $file_path,
            'heading'=> $request->heading,
            'description'=> $request->description,
            'category'=> $request->category
        ]);
        if ($new) {
            return redirect()->route('admin.newslist');
        }
    }


    public  function  create()
    {
        return view('admin.news.create');
    }

    public  function  edit()
    {
        return view('admin.news.edit');
    }

    public  function  view()
    {
        return view('admin.news.view');
    }
}

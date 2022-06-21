<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNftsPostRequest;
use App\Http\Requests\NewsSaveRequest;
use App\Models\News;
use App\Models\Nfts;
use File;

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

    public  function  destroy($id){
        News::where('id',$id)->delete();
        return redirect()->back();
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
            'category'=> 'Simple News',
            'show_home_page'=> ($request->show_home_page == 1)? 1 : 0
        ]);
        if ($new) {
            return redirect()->route('admin.newslist');
        }
    }


    public  function  create()
    {
        return view('admin.news.create');
    }

    public  function  edit($id)
    {
        $new = News::find($id);
        return view('admin.news.edit',compact('new'));
    }

    public  function  view($id)
    {
        $new = News::find($id);
        return view('admin.news.view',compact('new'));
    }

    public  function  update(Request  $request)
    {
        $new = News::find($request->id);
        if ($request->hasFile('file')) {

            //code for remove old file
            if($new->file_path != ''  && $new->file_path != null){
                $path = public_path().$new->file_path;
                File::delete($path);
            }
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $new->update(['file_path' => $file_path]);
        }
        $new->update([
            'heading'=> $request->heading,
            'description'=> $request->description,
            'category'=> 'Simple News',
            'show_home_page'=> ($request->show_home_page == 1)? 1 : 0
        ]);
        $new->save();

        if ($new) {
            return redirect()->route('admin.newslist');
        }
    }
}

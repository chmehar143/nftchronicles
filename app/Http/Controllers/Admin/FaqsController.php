<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqsSaveRequest;
use App\Models\Faqs;
use App\Models\News;
use App\Models\Nfts;
use File;

use Illuminate\Http\Request;

class FaqsController extends Controller
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
        $faqs = Faqs::get();
        return view('admin.faqs.list',compact('faqs'));

    }

    public  function  save(FaqsSaveRequest  $request)
    {
        $file_path = '';
        if ($request->hasFile('file')) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
        }
        $faq = Faqs::create([
            'file_path' => $file_path,
            'question'=> $request->question,
            'answer'=> $request->answer,
            'show_popular_question'=> ($request->show_popular_question == 1)? 1 : 0
        ]);
        if ($faq) {
            return redirect()->route('admin.faqslist');
        }
    }

    public  function  create()
    {
        return view('admin.faqs.create');
    }


    public  function  edit($id)
    {
        $faq = Faqs::find($id);
        return view('admin.faqs.edit',compact('faq'));
    }

    public  function  view($id)
    {
        $faq = Faqs::find($id);
        return view('admin.faqs.view',compact('faq'));
    }

    public  function  destroy($id){
        Faqs::where('id',$id)->delete();
        return redirect()->back();
    }

    public  function  update(Request  $request)
    {
        $faq = Faqs::find($request->id);
        if ($request->hasFile('file')) {

            //code for remove old file
            if($faq->file_path != ''  && $faq->file_path != null){
                $path = public_path().$faq->file_path;
                File::delete($path);
            }
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $faq->update(['file_path' => $file_path]);
        }
        $faq->update([
            'question'=> $request->question,
            'answer'=> $request->answer,
            'show_popular_question'=> ($request->show_popular_question == 1)? 1 : 0
        ]);
        $faq->save();

        if ($faq) {
            return redirect()->route('admin.faqslist');
        }
    }
}

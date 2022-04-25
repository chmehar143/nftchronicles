<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqsSaveRequest;
use App\Models\Faqs;
use App\Models\News;
use App\Models\Nfts;

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
        ]);
        if ($faq) {
            return redirect()->route('admin.faqslist');
        }
    }

    public  function  create()
    {
        return view('admin.faqs.create');
    }

    public  function  edit()
    {
        return view('admin.faqs.edit');
    }

    public  function  view()
    {
        return view('admin.faqs.view');
    }
}

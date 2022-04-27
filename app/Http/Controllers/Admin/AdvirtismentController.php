<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvSaveRequest;
use App\Models\Advirtisement;
use App\Models\News;
use Illuminate\Http\Request;

class AdvirtismentController extends Controller
{

   public function __construct()
   {
       $this->middleware('admin.auth:admin');
   }

   public  function  create()
   {
       return view('admin.advirtisment.create');
   }

   public  function  list()
   {
       return view('admin.advirtisment.list');
   }

    public  function  save(AdvSaveRequest  $request)
    {
        $file_path = '';
        if ($request->hasFile('file')) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
        }
        $Advirtisement = Advirtisement::create([
            'file_path' => $file_path,
            'category'=> $request->category,
            'show_home_page'=> $request->show_home_page
        ]);
        if ($Advirtisement) {
            return redirect()->route('admin.advirtismentlist');
        }
    }

   public  function  view()
   {
       return view('admin.advirtisment.view');
   }

   public  function   edit()
   {
       return view('admin.advirtisment.edit');
   }
}

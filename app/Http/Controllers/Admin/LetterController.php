<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public  function  list()
    {
         $newsletters = Newsletter::all();
        return view('admin.newsletter.list',compact('newsletters'));
    }

    public  function  destroy($id){
        Newsletter::where('id',$id)->delete();
        return redirect()->back();
    }

}

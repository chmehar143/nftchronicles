<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;

class ContactController extends Controller
{       /**
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
        $contact = Contact::get();
        return view('admin.contact.list',compact('contact'));

    }

    public  function  view()
    {
        return view('admin.contact.view');
    }
}

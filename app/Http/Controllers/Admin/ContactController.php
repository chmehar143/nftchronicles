<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\News;
use App\Models\Nfts;
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


    public  function  view($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.view',compact('contact'));
    }


    public  function  destroy($id){
        Contact::where('id',$id)->delete();
        return redirect()->back();
    }

    public function  change_response($id)
    {
        $contact = Contact::find($id);
        $status = ($contact->status == 1)? 0 : 1;
        $contact->update([
            'response' => $status
        ]);
        $contact->save();
    }
}

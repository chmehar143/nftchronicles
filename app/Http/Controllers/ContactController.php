<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public  function  save(Request  $request)
    {
        $contact = Contact::create([
            'full_name'=> $request->full_name,
            'email'=> $request->email,
            'question'=> $request->question,
            'description'=> $request->description
        ]);

        if ($contact) {
            return redirect()->route('index');
        }
    }
}

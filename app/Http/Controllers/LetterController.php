<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Nfts;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public  function  store(Request  $request)
    {
        $newsletter = Newsletter::create([
            'email' => $request->email
        ]);
        return response()->json(['success'=>'Thank you for joining our mailing list.']);
    }
}

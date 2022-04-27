<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

   public  function  view()
   {
       return view('admin.advirtisment.view');
   }

   public  function   edit()
   {
       return view('admin.advirtisment.edit');
   }
}

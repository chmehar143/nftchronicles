<?php

namespace App\Http\Controllers;

use App\Models\Advirtisement;
use App\Models\Faqs;
use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    public function index()
    {
        $faqs = Faqs::all();
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(3)->get();
        return view('help-questions',compact('faqs','advirtisements'));
    }

    public  function  show($id)
    {
        $faq = Faqs::find($id);
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(3)->get();
        $faqs = Faqs::all()->take(3);
        return view('question-details',compact('faq','advirtisements','faqs'));
    }
}

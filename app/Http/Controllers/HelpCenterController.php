<?php

namespace App\Http\Controllers;

use App\Models\Advirtisement;
use App\Models\Faqs;
use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    public function index()
    {
        $faqs = Faqs::where('category', 'faq')->get();
        $articles = Faqs::where('category', 'article')->paginate(8);
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(3)->get();
        //$pquestion = Faqs::where('show_popular_question', 1)->take(5)->get();
        return view('help-questions',compact('faqs','advirtisements','articles'));
    }

    public  function  show($id)
    {
        $faq = Faqs::find($id);
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(3)->get();
        $faqs = Faqs::all()->take(3);
        return view('question-details',compact('faq','advirtisements','faqs'));
    }
    public function search(Request  $request)
    {
        $search = $request->search;
        $faqs = Faqs::where('question', 'LIKE', '%'.$search.'%')
            ->get();
        $pquestion = Faqs::where('show_popular_question', 1)->take(5)->get();
        $advirtisements = Advirtisement::where('show_home_page', 1)
            ->where('category', 'advertisement')->take(3)->get();
        return view('help-questions',compact('faqs','advirtisements','pquestion'));
    }
}

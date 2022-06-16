<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advirtisement;
use App\Models\Giveaway;
use App\Models\Nfts;
use Illuminate\Http\Request;

class GiveawayController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    public  function  create()
    {
        return view('admin.giveaway.create');
    }


    public  function  list()
    {
        $giveawaies = Giveaway::get();
        return view('admin.giveaway.list',compact('giveawaies'));

    }

    public  function  destroy($id){
        Giveaway::where('id',$id)->delete();
        return redirect()->back();
    }

    public  function  edit($id)
    {
        $giveaway = Giveaway::find($id);
        return view('admin.giveaway.edit',compact('giveaway'));
    }

    public  function save(Request  $request)
    {
        $file_path = '';
        if ($request->hasFile('file')) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
        }
        $giveaway = Giveaway::create([
            'file_path' => $file_path,
            'title'=> $request->title,
            'details'=> $request->details,
            'discord_link'=> $request->discord_link,
            'twitter_link'=> $request->twitter_link,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date
        ]);

        if ($giveaway) {
            return redirect()->route('admin.giveawaylist');
        }

    }
}

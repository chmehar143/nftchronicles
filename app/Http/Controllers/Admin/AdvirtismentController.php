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
        $advirtisements = Advirtisement::get();
        return view('admin.advirtisment.list',compact('advirtisements'));

    }

    public  function  destroy($id){
        Advirtisement::where('id',$id)->delete();
        return redirect()->back();
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
            'show_home_page'=> ($request->show_home_page == 1)? 1 : 0
        ]);
        if ($Advirtisement) {
            return redirect()->route('admin.advirtismentlist');
        }
    }

   public  function  view()
   {
       return view('admin.advirtisment.view');
   }

    public  function  edit($id)
    {
        $advirtisement = Advirtisement::find($id);
        return view('admin.advirtisment.edit',compact('advirtisement'));
    }

    public  function  update(Request  $request)
    {
        $adv = Advirtisement::find($request->id);
        if ($request->hasFile('file')) {

            //code for remove old file
            if($adv->file_path != ''  && $adv->file_path != null){
                $path = public_path().$adv->file_path;
                File::delete($path);
            }
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $adv->update(['file_path' => $file_path]);
        }
        $adv->update([
            'category'=> $request->category,
            'show_home_page'=> ($request->show_home_page == 1)? 1 : 0,
        ]);
        $adv->save();

        if ($adv) {
            return redirect()->route('admin.advirtismentlist');
        }
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public  function  edit($id)
    {
        if (Setting::exists()) {
            $setting = Setting::find($id);
        } else {
            $setting = Setting::create([
                'new' => 0
            ]);
        }
        return view('admin.setting.setting',compact('setting'));
    }

    public  function  update(Request  $request)
    {
        $setting = Setting::find($request->id);
        $setting->update([
            'new'=> ($request->new == 1)? 1 : 0,
            'faq'=> ($request->faq == 1)? 1 : 0
        ]);
        $setting->save();
        return view('admin.setting.setting',compact('setting'));

    }
}

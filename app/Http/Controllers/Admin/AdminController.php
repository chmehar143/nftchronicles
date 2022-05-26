<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNftsPostRequest;
use App\Models\Contact;
use App\Models\Faqs;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
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
        $admins = Admin::get();
        return view('admin.user.list',compact('admins'));

    }

    public  function  create()
    {
        return view('admin.user.create');
    }

    public  function  save(UserRequest $request)
    {
         $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
             'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        if ($admin) {
            return redirect()->route('admin.userlist');
        }
    }
    public  function  destroy($id){
        Admin::where('id',$id)->delete();
        return redirect()->back();
    }
    public  function  edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.user.edit',compact('admin'));
    }

    public  function  update(Request  $request)
    {

        $admin = Admin::find($request->id);
        if (!empty($request->password)) {
            $admin->update(['password' => Hash::make($request->password)]);
        }
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);
        $admin->save();

        if ($admin) {
            return redirect()->route('admin.userlist');
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show ()
    {
        $users=new User();
        $users=User::all();
        return view('crud.data_view',['users'=>$users]);
    }

    public function create()
    {
        return view('crud.create_data');
    }

    public function store (Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|string',
            'password'=>'required'
        ]);
        $users=new User();
        $users->name     = $request->name;
        $users->email    = $request->email;
        $users->password = $request->password;
        $users->save();

        return redirect('/')->with('status','Data Save Successfully');
    }

    public function edit($id)
    {
        $users=new User();
        $users=User::find($id);

        return view('crud.data_edit',['users'=>$users]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|string',
            'password'=>'required'
        ]);

        $users=User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();

        return redirect('/')->with('status','Data Upadated Successfully');
    }
}

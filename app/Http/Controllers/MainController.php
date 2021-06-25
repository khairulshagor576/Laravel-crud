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
}

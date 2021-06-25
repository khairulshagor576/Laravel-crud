<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show ()
    {
        //$user=new User();
        //return $user=User::all();
        return view('crud.data_view');
    }
}

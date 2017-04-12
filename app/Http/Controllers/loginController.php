<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class loginController extends Controller
{
    //

    public function login(){
      return view('login');
    }

    public function postLogin(Request $request){
      Sentinel::authenticate($request->all());
      // return Sentinel::check();
      return redirect('/');
    }

    public function logout(){
      Sentinel::logout();
      return redirect('/');
    }
}

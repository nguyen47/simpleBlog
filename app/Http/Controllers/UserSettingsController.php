<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\activations;
use App\RoleUser;

class UserSettingsController extends Controller
{
    //
    public function listUser(){
    	$user = User::all();
    	return view('admin.userSettings.list',['user'=>$user]);
    }

    public function activations(){
    	$activations = activations::all();
    	return view('admin.userSettings.activation',['activations'=>$activations]);
    }

    public function userRole(){
        $userRole = RoleUser::all();
        return view('admin.userSettings.userRole',['userRole'=>$userRole]);
    }
}

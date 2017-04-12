<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class registerController extends Controller
{
  //
  public function register(){
    return view('register');
  }
  public function postRegister(Request $request){
    if ($request->password_confirm == $request->password) {
      $confirm = $request->password;
    }

    $credentials = [
      'email'    => $request->email,
      'first_name' =>$request->first_name,
      'last_name' => $request->last_name,
      'password' => $confirm,
    ];
    $user = Sentinel::register($credentials);

    $activation = Activation::create($user);

    $role = Sentinel::findRoleBySlug('client');

    $role->users()->attach($user);

    $this->sendEmail($user, $activation->code);

    return redirect('/');
  }

  private function sendEmail($user, $code){
    Mail::send('emails.activation', [
        'user' => $user,
        'code' =>  $code
      ], function($message) use ($user){
        $message->to($user->email);
        $message->subject("Hello, $user->first_name, activate your account");
      });
  }
}

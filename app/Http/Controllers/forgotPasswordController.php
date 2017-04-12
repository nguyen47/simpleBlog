<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Sentinel;
class forgotPasswordController extends Controller
{
    //
    public function forgotPassword(){
    	return view ('forgot-password');
    }

    public function postForgotPassword(Request $request){
    	$user = User::whereEmail($request->email)->first();

    	$sentinelUser = Sentinel::findById($user->id);
    	if (count($user) == 0 ) 
    		echo "Ngon lanh canh dao";
    	
    	$reminder = Reminder::exists($sentinelUser) ?: Reminder::create($sentinelUser);
    	
    	$this->sendEmail($user, $reminder->code);

    	echo "Ngon lanh canh dao";

    }

    public function resetPassword($email, $resetCode){
    	$user = User::byEmail($email);

    	$sentinelUser = Sentinel::findById($user->id);

    	if ($reminder = Reminder::exists($sentinelUser)) {
    		if ($resetCode == $reminder->code) {
    			return view('reset-password');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		return redirect('/');
    	}
    }

    public function postResetPassword(Request $request, $email, $resetCode){
    	$user = User::byEmail($email);

    	$sentinelUser = Sentinel::findById($user->id);

    	if ($reminder = Reminder::exists($sentinelUser)) {
    		if ($resetCode == $reminder->code) {
    			Reminder::complete($sentinelUser, $resetCode, $request->password);

    			return redirect('/login');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		return redirect('/');
    	}
    }

    private function sendEmail($user, $code){
    Mail::send('emails.forgotPassword', [
        'user' => $user,
        'code' =>  $code
      ], function($message) use ($user){
        $message->to($user->email);
        $message->subject("Hello, $user->first_name, Reset your account");
      });
  }
}

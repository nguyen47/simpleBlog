<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use Activation;

class activationController extends Controller
{
    //
	public function activate($email, $activateionCode){

		$user = User::whereEmail($email)->first();

		$sentinelUser = Sentinel::findById($user->id);

		if (Activation::complete($sentinelUser, $activateionCode)) {
			return redirect('/login');
		}
	}
}

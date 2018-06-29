<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class userController extends Controller
{

    public function createUser(Request $request){

    	$email = $request->email;

    	$datos = new User;
    	$datos->fill($request->all());
    	$datos->save();

    	return view('welcome', compact('email'));
    }

    public function login(Request $request){
    	$email = $request['email'];
    	$password = $request->password;
    	$flag = true; 

		$checkUser = User::where('email',$email)->where('password',$password)->exists();

		if ($checkUser) {
			return view('welcome',compact('email'));
		}

		return view('auth.login',compact('email','flag'));
    }

    public function readUsers(){
        $users = User::all();

        return view('user.show',compact('users'));
    }

    public function deleteUser(Request $request){

    }


}

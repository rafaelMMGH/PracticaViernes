<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Redirect;
use Session;

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
			$vista='Welcome';
			$flag=false;     
			// return view('welcome',compact('email'));
			$nombre= User::where ('email',$email)->pluck('name');
			Session::put(['nombre'=>$nombre]);
		} else{
			$vista='auth.login';
			$flag=true; 
 		//return view('auth.login',compact('email','flag'));
		}
		return view($vista,compact('email','flag'));
    }

    public function readUsers(){
        $users = User::all();

        return view('user.show',compact('users'));
    }

    public function deleteUser($id){
		$user = User::findOrFail($id);
		$user->delete();

		return Redirect::route('/');
		// o  
		//return view('users.show');
    }

	public function deleteUser2($id,$idSesRed){
		$idSession=session()->getId();
	
		if($idSession==$idSesRec){
			$userDelete = User::findOrFail($id);
		
			$userDelete ->delete();
		
			$users =User::all();
			 
		    return view('user.show',compact('users'));
		} else{
		  return "Te descubrimos eres un hacker";
		}
	}
	


}

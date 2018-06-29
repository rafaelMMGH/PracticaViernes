<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
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

		$checkUser = User::where('email',$email)->where('password',$password)->exists();

		if ($checkUser) {
			
            $nombre = User::where('email',$email)->pluck('name');
         //   session('nombre',$nombre);
            Session::put(['nombre'=>$nombre]);
            $vista='welcome';
            $flag=false;
        }
        else{
            $vista='auth.login';
            $flag=true;
            
		}
		return view($vista,compact('email','flag'));
    }

    public function readUsers(){
        $users = User::all();

        return view('user.show',compact('users'));
    }

    public function deleteUser(Request $request){

    }
    public function deleteUserDos($id,$idSesRec){
        $idSession = session()->getId();

        if ($idSession == $idSesRec) {
            $userDelete = User::findOrFall($id);
            $userDelete->delete();
            $users = User::all();

            return view ('user.show', compact('users'));
        }else{
            return "¡te descubrimos, eres un Hacker!";
        }
    }

}

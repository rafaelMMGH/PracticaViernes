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
    	$email = $request['email']; //toma el valor de email
    	$password = $request->password; //es otra forma de hacer lo mismo que en $email
    	$flag = true; 

		$checkUser = User::where('email',$email)->where('password',$password)->exists(); //exists() si existe pone true en $checkUser

        if ($checkUser) {
            //busca email y toma el nombre del usuario mediante pluck
            $nombre=User::where('email',$email)->pluck('name');

            //se crea la variable de sesión
            Session('nombre',$nombre);
            //Session::put(['nombre'=>$nombre]); //otra forma de hacer lo mismo que la linea anterior

            $vista='welcome';
            $flag = false;
        }else{
            $vista='auth.login';
            $flag='true';
        }

        return view($vista,compact('email','flag'));
}


    public function readUsers(){
        $users = User::all(); //toma del modelo User todos los datos de la bd

        return view('user.show',compact('users'));
    }

    public function deleteUser($id){
        $users = User::findOrFail($id); //lo busca en el modelo el id 
        $users->delete();

        return view('welcome');   //redirecciona a home
        //return view("user.show",compact('users'));
    }

    public function deleteUserDos($id,$idSesRec){
        $idSession=session()->getid();

        if($idSession == $idSesRec){
            $users = User::findOrFail($id); //busca en el modelo el id 
            $users->delete();

            $users = User::all();
            return view('user.show',compact('users'));
            }else{
                return "te descubrimos eres un hacker";
            } 
    }

}

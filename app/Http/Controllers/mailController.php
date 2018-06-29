<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Session;
use Redirect;

class mailController extends Controller
{
    public function sendmail(Request $request){

    	$email = $request->email;

    	Mail::send('emails.contact',$request->all(), function($msj){
    		$msj->subject('Correo de contacto');
    		$msj->to('bakur95@gmail.com');
    	});

    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/');
    }
}

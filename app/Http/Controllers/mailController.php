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

    	Mail::send('emails.contact',$request->all(), function($msj) use($request){
    		$msj->subject($request->name);
    		$msj->to($request->email);
    	});

    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/');
    }
}

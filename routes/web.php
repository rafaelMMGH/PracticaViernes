<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
*** Vistas
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
	return view('auth.login');
});

Route::get('/registro', function(){
	return view('auth.register');
});

Route::get('/mail', function(){
	return view('user.mail');
});

/*
*** Rutas a controladores
*/


Route::post('/createUser', 'userController@createUser');

Route::post('/checkUser', 'userController@login');

Route::get('/readUsers', 'userController@readUsers');

Route::post('/deleteUser','userController@deleteUser');


/*
*** Mail
*/

Route::post('/sendmail','mailController@sendmail');

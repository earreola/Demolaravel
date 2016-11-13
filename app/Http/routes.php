<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('usuario/mostrar','UsuarioController@mostrar');
Route::get('usuario/edit','UsuarioController@edit');
Route::resource('usuario','UsuarioController');






Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@mostrar');



Route::get('/auth/mostrar', 'UsuarioController@mostrar');

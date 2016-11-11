<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    //
    public function create()
    {
    	return view('welcome');
    }

    public function store(Request $request)
    {
    	\App\User::create([
             'name' => $request['name'],
             'email' => $request['email'],
             'password' => bcrypt($request['password']),
    		]);
    	return "Usuario Registrado";

    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    //  
    public function mostrar(){
    	$users = \App\User::all();
    	return View('usuario/mostrar')->with('users', $users);
    }
    public function create()
    {	
    	return View('usuario/create');
    }


    public function store(Request $request)
    {
    	\App\User::create([
             'name' => $request['name'],
             'email' => $request['email'],
             'password' => bcrypt($request['password']),
    		]);
    	return View('welcome');

    }
  
    public function edit($id)
    {
    	$user = \App\User::findOrFail($id);

    	return view('usuario/edit', compact('user')); 
    }


    public function update(Request $request, $id)
    {
    	$user = \App\User::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();

    	return View('home');

    }

	public function destroy($id)
	{
       \App\User::destroy($id);
       return View('');
	}
	
	    

}


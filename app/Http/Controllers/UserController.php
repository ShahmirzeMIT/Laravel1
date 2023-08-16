<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'name' => 'required | max:10  ',
            'password' => 'required | max:10  ',
        ]);

        $name = $data['name'];
        $password = $data['password'];
       
        return "Data received from login form: Name = $name, Password = $password";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function  viewload(){
        return view('user',['user'=>["anil",'ahmet','kahan']]);
    }
}


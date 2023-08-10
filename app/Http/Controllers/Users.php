<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function data($name){
        return view("hello",['name'=>$name]);
    }
}

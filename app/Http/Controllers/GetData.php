<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetData extends Controller
{
 public function  showData(){
	return view('qeydiyyat');
  }
  public function ShowMyData(Request $req){
	$data=$req->validate([
		"name"=>"required",
		"pass"=>"required",
	]);
	$name=$data['name'];
	$pass=$data['pass'];
	return("Data reached here ");
  }
}

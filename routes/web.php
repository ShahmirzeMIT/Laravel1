<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GetData;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("login", [UserController::class, 'showLoginForm'])->name('login');
// Route::post("login", [UserController::class, 'login']);

Route::get("qeydiyyat", [GetData::class, 'showData'])->name('qeydiyyat');
Route::post("qeydiyyat", [GetData::class, 'ShowMyData']);

// Route::view("warn",'warn');
Route::view("check3", 'check3')->middleware('protectedPage');

// Route::group(['middleware'=>['protectedPage']],function (){
//     Route::view("check2",'check2');
// });

Route::view("warn2",'warn2');
Route::view("check3",'check3');
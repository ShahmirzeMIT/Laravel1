<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("user", [UserController::class, 'viewload']);

// Route::get('/home',function (){
//     return view('home');
// });

// Route::get('/about',function (){
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::view('/hello', 'hello');
// Route::view('/xyz', 'contact');

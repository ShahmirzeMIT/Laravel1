<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home',function (){
//     return view('home');
// });

// Route::get('/about',function (){
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/users',function(){
    return view("users");
});
// Route::view('/hello', 'hello');
// Route::view('/xyz', 'contact');

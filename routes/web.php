<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\users;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/index', function(){
   return view('index');
 });

 Route::get('/about', function(){
     return view('about');
   });

 Route::get('/contact', function(){
     return view('contact');
   });

// Route::get("users", [users::class, 'index']);

// Route::get("users/{name}", [users::class, 'index']);
    

// Route::get('/about', function() {
//      return view('about', [
//         'post' => file_get_contents(__DIR__ . "/../resources/post/first_post.html")
//         ]); 
// });

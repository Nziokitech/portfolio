<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    // public function index(){
    //     echo "Hello, i am laravel";
    // }

    public function index($name){
        echo "Hello, ".$name." i am laravel";
    }
}

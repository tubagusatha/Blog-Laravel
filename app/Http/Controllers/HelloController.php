<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    function cek() {
        echo "test";
    }

    function world() {
        return view('welcome');
    }


}

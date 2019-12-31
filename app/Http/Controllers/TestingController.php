<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(){
        $var = 1000000;
        return view('testing', ["myVar" => $var]);
    }

    public function index2(){
        $var = 1;
        return view('testing', ["myVar" => $var]);
    }

    
    public function index3($var, $var2){
        return view('testing', ["myVar" => $var+$var2]);
    }
}

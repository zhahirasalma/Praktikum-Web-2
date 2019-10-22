<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('home');
    }

    public function index2(){
    	return view('pertama');
    }

    public function index3(){
    	return view('kedua');
    }

    public function index4(){
    	return view('ketiga');
    }
}

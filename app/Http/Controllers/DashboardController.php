<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function base(){
        return view('base');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function tabel(){
        return view('tabel');
    }

    public function charts(){
        return view('charts');
    }
}


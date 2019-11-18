<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Kategori;

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

    public function kategori(){
        return view('kategori');
    }

    public function tambah_kategori(){
        return view('tambah_kategori');
    }

    public function produk(){
        return view('produk');
    }

    public function tambah_produk(){
        return view('tambah_produk');
    }

    /*public function edit_kategori(){
        return view('edit_kategori');
    }*/
}



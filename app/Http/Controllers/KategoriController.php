<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function create(){
    	return view('kategori.create');
    }

    public function delete(){
    	return view('kategori.delete');
    }

    public function edit(){
    	return view('kategori.edit');
    }

    public function koneksi(){
    	return view('kategori.koneksi');
    }

    public function login(){
        return view('kategori.login');
    }

    public function read(){
        return view('kategori.read');
    }

    public function tambah(){
        return view('kategori.tambah');
    }

    public function update(){
        return view('kategori.update');
    }


}

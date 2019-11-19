<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FirstModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FirstModel::all();
        return view('kategori')->with('kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('tambah_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_kategori'=>'required',
        // ]);
        // $kategori = new FirstModel([
        //     'nama_kategori' => $request->input('nama_kategori')
        // ]);
        // $kategori->save();
        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = FirstModel::where('id_kategori', '=',$id)->firstOrFail();
       return view('edit_kategori')->with('kategori', $data);
        // echo "string";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori'=>'required',
        ]);
        $data=[
            'nama_kategori'=>$request->nama_kategori,
        ];
        FirstModel::where('id_kategori',$id)->update($data);
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FirstModel::where('id_kategori',$id)->delete();
        return redirect('kategori');
    }
}

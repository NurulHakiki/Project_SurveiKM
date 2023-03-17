<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller

{

    public function index()
    {
        $kategori = kategori::all();
        // dd($kategori);
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->all();
        // dd($data);
        $kategori = kategori::create($data);

    return redirect()->route('kategori')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id_kategori=$request->get('id_kategori');
        $data = kategori::where('id_kategori',$id_kategori)->get();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori $kategori)
    {
        //
        $data=kategori::findOrFail($request->id_kategori);
    $dataUpdate = $request->all();
    $data->update($dataUpdate);
    //    dd($data);
    return redirect()->route('kategori')->with('status','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($kategori)
    {
        // dd($kategori);
        $data = kategori::find($kategori);
        // dd($data);
        $data->delete();

        return redirect()->route('kategori')->with('status','Data Berhasil di Hapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\SubKategori;
use App\Models\Kategori;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
  {
      //
      // $sub_kategori = sub_kategori::all();
      $SubKategori = SubKategori::join('kategori', 'kategori.id_kategori', '=', 'sub_kategori.id_kategori')->get(['sub_kategori.*', 'kategori.nama_kategori']);
      $kategori = kategori::all();
      // dd($sub_kategori);
      return view('sub_kategori.index', compact('SubKategori','kategori'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
       $data =$request->all();
      // dd($data);
      $SubKategori = SubKategori::create($data);

     return redirect()->route('sub-kategori')->with('status','Data Berhasil Ditambahkan');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\sub_kategori  $sub_kategori
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request)
  {
      //
       $id_sub_kategori=$request->get('id_sub_kategori');
      $data = sub_kategori::where('id_sub_kategori',$id_sub_kategori)->get();
      // dd($id_kategori);
      // $data = kategori::firstWhere('id_kategori', $id_kategori);
      // dd($data);
      return $data;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\sub_kategori  $sub_kategori
   * @return \Illuminate\Http\Response
   */
  public function edit(sub_kategori $sub_kategori)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\sub_kategori  $sub_kategori
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, sub_kategori $sub_kategori)
  {
      $data=SubKategori::findOrFail($request->id_sub_kategori);
     $dataUpdate = $request->all();
     $data->update($dataUpdate);
  //    dd($data);
     return redirect()->route('sub-kategori')->with('status','Data Berhasil di Ubah');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\sub_kategori  $sub_kategori
   * @return \Illuminate\Http\Response
   */
  public function destroy($sub_kategori)
  {
      //
      $data = SubKategori::find($sub_kategori);
      $data->delete();

      return redirect()->route('sub-kategori')->with('status','Data Berhasil di Hapus');
  }
}

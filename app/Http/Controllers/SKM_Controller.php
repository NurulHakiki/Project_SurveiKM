<?php

namespace App\Http\Controllers;

use App\Models\skm;
use App\Models\SubKategori;
use Illuminate\Http\Request;

class SKM_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
  {
      //
      // $skm = skm::all();
      $skm = skm::join('sub_kategori', 'sub_kategori.id_sub_kategori', '=', 'skm.id_sub_kategori')->get(['skm.*', 'sub_kategori.nama_kategori', 'sub_kategori.nama_sub_kategori']);
      $sub_kategori = sub_kategori::all();
      // dd($sub_kategori);
      return view('skm.index', compact('skm','sub_kategori'));
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
      $skm = skm::create($data);

     return redirect()->route('skm')->with('status','Data Berhasil Ditambahkan');
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
       $id_skm=$request->get('id_skm');
      $data = skm::where('id_skm',$id_skm)->get();
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
  public function edit(skm $skm)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\sub_kategori  $skm
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, skm $skm)
  {
      $data=skm::findOrFail($request->id_skm);
     $dataUpdate = $request->all();
     $data->update($dataUpdate);
  //    dd($data);
     return redirect()->route('skm')->with('status','Data Berhasil di Ubah');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\skm  $skm
   * @return \Illuminate\Http\Response
   */
  public function destroy($skm)
  {
      //
      $data = skm::find($skm);
      $data->delete();

      return redirect()->route('skm')->with('status','Data Berhasil di Hapus');
  }
}

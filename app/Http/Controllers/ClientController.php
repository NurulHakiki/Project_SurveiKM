<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\SubKategori;
use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        //
        $value = client::join('sub_kategori', 'sub_kategori.id_sub_kategori', '=', 'client.id_sub_kategori')->get(['client.*', 'sub_kategori.nama_sub_kategori']);
        $value = client::join('kategori', 'kategori.id_kategori', '=', 'client.id_kategori')->get(['client.*', 'kategori.nama_kategori']);
        $client = client::all();
        // dd($value);
        return view('client.index', compact('value','client'));
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
        $value = client::create($data);

       return redirect()->route('client')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
         $client=$request->get('id_client');
        $data = client::where('id_client',$client)->get();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
          $data=client::findOrFail($request->id_client);
       $dataUpdate = $request->all();
       $data->update($dataUpdate);
    //    dd($data);
       return redirect()->route('client')->with('status','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($client)
    {
        //
        $data = client::find($client);
        // dd($data);
        $data->delete();

        return redirect()->route('client')->with('status','Data Berhasil di Hapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use Alert;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::all();         
        return view('ruangan.ruangan' , ['ruangan'  => $ruangan]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_ruangan = new Ruangan;        
        $save_ruangan->nama_ruangan = $request->get('nama_ruangan');         
        $save_ruangan->tarif_perhari = $request->get('tarif_perhari');         
        $save_ruangan->stok_ruangan = $request->get('stok_ruangan');         
        $save_ruangan->save();
        Alert::success('Tersimpan','Data Berhasil Disimpan');
        return redirect()->route('ruangan.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan_edit = Ruangan::findOrFail($id);         
        return view('ruangan.edit' , ['ruangan'  => $ruangan_edit]); 
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
      $ruangan = Ruangan::findOrFail($id);         
      $ruangan->nama_ruangan = $request->get('nama_ruangan');         
      $ruangan->tarif_perhari = $request->get('tarif_perhari');         
      $ruangan->stok_ruangan = $request->get('stok_ruangan');         
      $ruangan->save();
      Alert::success('Terupdate','Data Berhasil Diupdate');
      return redirect()->route('ruangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete(); 
        Alert::success('Terhapus','Data Berhasil Dihapus');
        return redirect()->route('ruangan.index');
    }
}

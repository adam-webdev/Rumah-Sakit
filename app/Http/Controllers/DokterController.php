<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use Alert;
class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::all();         
        return view('dokter.dokter' , ['dokter'  => $dokter]); 
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
        $dokter = new Dokter;        
        $dokter->nama_dokter = $request->get('nama_dokter');                 
        $dokter->spesialis = $request->get('spesialis');
        $dokter->jenis_kelamin = $request->get('jenis_kelamin');
        $dokter->alamat = $request->get('alamat');
        $dokter->tarif = $request->get('tarif');
        $dokter->no_hp = $request->get('no_hp');
        $dokter->save(); 
        Alert::success('Tersimpan','Data Berhasil disimpan');
        return redirect()->route('dokter.index' );
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
        $dokter_edit = Dokter::findOrFail($id);         
        return view('dokter.edit', ['dokter'  => $dokter_edit]); 
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
      $dokter = Dokter::findOrFail($id);         
      $dokter->nama_dokter = $request->get('nama_dokter');         
      $dokter->jenis_kelamin = $request->get('jenis_kelamin');         
      $dokter->alamat = $request->get('alamat'); 
      $dokter->no_hp = $request->get('no_hp');
      $dokter->tarif = $request->get('tarif');
      $dokter->spesialis = $request->get('spesialis');
      $dokter->save(); 
      Alert::success('Terupdate','Data Berhasil Diupdate');
      return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete(); 
        Alert::success('Terhapus','Data Berhasil Dihapus');
        return redirect()->route('dokter.index');
    }
}

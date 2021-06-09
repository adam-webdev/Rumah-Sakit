<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = pasien::all();         
        return view( 'pasien.pasien' , ['pasien'  => $pasien]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.input'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_pasien = new pasien;        
        $save_pasien->nama_pasien = $request->get('nama_pasien');         
        $save_pasien->jenis_kelamin = $request->get('jenis_kelamin');         
        $save_pasien->alamat = $request->get('alamat');
        $save_pasien->telepon = $request->get('telepon');
        $save_pasien->riwayat_penyakit = $request->get('riwayat_penyakit');
        $save_pasien->save(); 
 
        return redirect()->route( 'pasien.index' ); 
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
        $pasien_edit = pasien::findOrFail($id);         
        return view( 'pasien.edit' , ['pasien'  => $pasien_edit]); 
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
      $pasien = pasien::findOrFail($id);         
      $pasien->nama_pasien = $request->get('nama_pasien');         
      $pasien->jenis_kelamin = $request->get('jenis_kelamin');         
      $pasien->alamat = $request->get('alamat');
      $pasien->telepon = $request->get('telepon');
      $pasien->riwayat_penyakit = $request->get('riwayat_penyakit');
      $pasien->save(); 
 
      return redirect()->route( 'pasien.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = pasien::findOrFail($id);
        $pasien->delete(); 
 
        return redirect()->route( 'pasien.index');
    }
}

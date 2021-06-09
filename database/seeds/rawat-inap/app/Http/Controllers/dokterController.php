<?php

namespace App\Http\Controllers;

use App\dokter;
use Illuminate\Http\Request;

class dokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $dokter = dokter::all();         
        return view( 'dokter.dokter' , ['dokter'  => $dokter]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_dokter = new dokter;        
        $save_dokter->nama_dokter = $request->get('nama_dokter');                 
        $save_dokter->spesialis = $request->get('spesialis');
        $save_dokter->jenis_kelamin = $request->get('jenis_kelamin');
        $save_dokter->alamat = $request->get('alamat');
        $save_dokter->tarif = $request->get('tarif');
        $save_dokter->no_hp = $request->get('no_hp');
        $save_dokter->save(); 
 
        return redirect()->route( 'dokter.index' );
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
        $dokter_edit = dokter::findOrFail($id);         
        return view( 'dokter.edit' , ['dokter'  => $dokter_edit]); 
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
      $dokter = dokter::findOrFail($id);         
      $dokter->nama_dokter = $request->get('nama_dokter');         
      $dokter->jenis_kelamin = $request->get('jenis_kelamin');         
      $dokter->alamat = $request->get('alamat'); 
      $dokter->no_hp = $request->get('no_hp');
      $dokter->tarif = $request->get('tarif');
      $dokter->spesialis = $request->get('spesialis');
      $dokter->save(); 
 
      return redirect()->route( 'dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = dokter::findOrFail($id);
        $dokter->delete(); 
 
        return redirect()->route( 'dokter.index');
    }
}

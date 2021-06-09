<?php

namespace App\Http\Controllers;

use App\kamar;
use Illuminate\Http\Request;

class kamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = kamar::all();         
        return view( 'kamar.kamar' , ['kamar'  => $kamar]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_kamar = new kamar;        
        $save_kamar->kelas = $request->get('kelas');         
        $save_kamar->tarif_perhari = $request->get('tarif_perhari');         
        $save_kamar->save(); 
 
        return redirect()->route( 'kamar.index' ); 
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
        $kamar_edit = kamar::findOrFail($id);         
        return view( 'kamar.edit' , ['kamar'  => $kamar_edit]); 
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
      $kamar = kamar::findOrFail($id);         
      $kamar->kelas = $request->get('kelas');         
      $kamar->tarif_perhari = $request->get('tarif_perhari');         
      $kamar->save(); 
 
      return redirect()->route( 'kamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = kamar::findOrFail($id);
        $kamar->delete(); 
 
        return redirect()->route( 'kamar.index');
    }
}

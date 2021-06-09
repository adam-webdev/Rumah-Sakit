<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;

class ObatController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();         
        return view( 'obat.index' , compact('obat')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat = new Obat;        
        $obat->id = $request->get('kode_obat');         
        $obat->nama_obat = $request->get('nama_obat');         
        $obat->harga_obat = $request->get('harga_obat');         
        $obat->fungsi_obat = $request->get('fungsi_obat');         
        $obat->save(); 
 
        return redirect()->route( 'obat.index' ); 
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
        $obat = Obat::findOrFail($id);         
        return view( 'obat.edit' , ['obat'  => $obat]); 
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
      $obat = Obat::findOrFail($id);         
      $obat->id = $request->get('kode_obat');         
      $obat->nama_obat = $request->get('nama_obat');         
      $obat->fungsi_obat = $request->get('harga_obat');          
      $obat->save(); 
 
      return redirect()->route( 'obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete(); 
        return redirect()->route( 'obat.index');
    }
}

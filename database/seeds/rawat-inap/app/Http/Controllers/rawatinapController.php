<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{rawatinap,dokter,pasien,kamar,Obat, obat_rawatinap};
use Illuminate\Support\Facades\DB;

class rawatinapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rawatinap = rawatinap::with('dokter','kamar','pasien','obat')->get();         
        return view( 'rawatinap.rawatinap' , ['rawatinap'  => $rawatinap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rawatinap.input',[
            'dokter' => dokter::get(),
            'obat' => Obat::get(),
            'kamar' => kamar::get(),
            'pasien' => pasien::get(),
            'rawatinap' => rawatinap::get()
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = DB::table('rawatianp')
        $rawatinap = new rawatinap; 
        $rawatinap->pasien_id = $request->name_pasien;
        $rawatinap->dokter_id = $request->name_dokter;
        $rawatinap->kamar_id = $request->name_kamar;
        $rawatinap->save();
        $rawatinap->obat()->attach($request->name_obat);
        
        // $obat_rawatinap = new obat_rawatinap;
        // $obat = $request->name_obat;
        // $hasil = '';
        // // $obat->this->validate(['name_obat' => 'array|required']);
        // for($i=0; $i<count($obat); $i++)
        // {
        //     if($i == count($obat) -1){
        //         $hasil .= $obat[$i];
        //     } else {
        //         $hasil .= $obat[$i].',';
        //     }
        // }
        // $obat_rawatinap->obat_id = $hasil;
        // $obat_rawatinap->rawatinap_id = $rawatinap->id;
        // $obat_rawatinap->save(); 
        // dd($hasil);
        // // $rawatinap->nama_pasien = $request->nama_pasien;
        // // $rawatinap->tarif_dokter = $request->tarif_dokter;
        // // $rawatinap->tarif_kamar = $request->tarif_kamar;
        // // $rawatinap->harga_obat = $request->harga_obat;
        return redirect()->route( 'rawatinap.index' ); 

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
        $rawatinap = rawatinap::findOrFail($id); 
        return view('rawatinap.edit',[
            'dokter' => dokter::get(),
            'kamar' => kamar::get(),
            'obat' => Obat::get(),
            'pasien' => pasien::get(),
            'rawatinap' => $rawatinap]); 
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
        $rawatinap = rawatinap::findOrFail($id); 
        $rawatinap->pasien_id = $request->name_pasien;
        $rawatinap->dokter_id = $request->name_dokter;
        $rawatinap->kamar_id = $request->name_kamar;
        $rawatinap->obat_id = $request->name_obat;
        // $rawatinap->nama_pasien = $request->nama_pasien;
        // $rawatinap->tarif_dokter = $request->tarif_dokter;
        // $rawatinap->tarif_kamar = $request->tarif_kamar;
        // $rawatinap->harga_obat = $request->harga_obat;
        $rawatinap->update();
        return redirect()->route('rawatinap.index' ); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rawatinap = rawatinap::findOrFail($id);
        $rawatinap->delete();
        return redirect()->route('rawatinap.index');
    }
}

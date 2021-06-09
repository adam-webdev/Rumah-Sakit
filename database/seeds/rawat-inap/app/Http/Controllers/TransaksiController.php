<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{rawatinap,Transaksi,dokter,kamar, obat_rawatinap, pasien};
use Illuminate\Support\Facades\DB;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  $transaksi = Transaksi::with('rawatinap')->get();
        // $rawatinap = obat_rawatinap::get();
        $transaksi = Transaksi::with('rawatinap.dokter','rawatinap.pasien',
                                    'rawatinap.obat','rawatinap.kamar')->get();
        return view('transaksi.index',['transaksi' => $transaksi]);
        // foreach($transaksi as $r){
        //     foreach($r->rawatinap->obat as $o){
        //         $obat = $o->nama_obat;
        //         $obat2 = $o->harga_obat;
        //     }
        //     $pasien = $r->rawatinap->pasien->nama_pasien;
        //     $kamar = $r->rawatinap->kamar->kelas;
        //     $dokter = $r->rawatinap->dokter->tarif;
        // }
        // dd($transaksi);
    }

    public function cetak()
    {
        $transaksi = "helloworld";
        $pdf = PDF::loadView('transaksi.cetak',['transaksi' => $transaksi]);
    	return $pdf->stream('laporan-transaksi.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create',[
            'rawatinap' => rawatinap::get(),
            'transaksi' => new Transaksi()
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
        $transaksi = new Transaksi;
        $transaksi->rawatinap_id = $request->rawatinap_id;
        $transaksi->jumlah_hari = $request->jumlah_hari;
        $transaksi->save();
        return redirect()->route('transaksi.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

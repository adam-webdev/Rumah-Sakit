<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Transaksi,Rawatinap};
use Barryvdh\DomPDF\Facade as PDF;
use Alert;
use Carbon\Carbon;


class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('rawatinap.dokter','rawatinap.pasien',
                    'rawatinap.obat','rawatinap.ruangan')->orderBy('id','ASC')->get();
        return view('transaksi.index',['transaksi' => $transaksi]);
    }

    public function total()
    {
        $transaksi = Transaksi::with('rawatinap.dokter','rawatinap.pasien',
                    'rawatinap.obat','rawatinap.ruangan')->get();

        foreach($transaksi as $t){
            $harga_dokter =  $t->rawatinap->dokter->tarif;
            $harga_ruangan = $t->rawatinap->ruangan->tarif_perhari;
            $harga_obat = $t->rawatinap->obat->sum('harga_obat');
            $jumlah_hari = $t->jumlah_hari;
            $jumlah = $jumlah_hari * $harga_ruangan + $harga_dokter + $harga_obat;
            return $jumlah;
        }
    }

    public function cetak($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $pdf = PDF::loadview('transaksi.cetak',compact('transaksi','today'))->setPaper('A4','landscape');
    	return $pdf->stream('laporan-transaksi.pdf');
    }

    
    public function create()
    {
        return view('transaksi.create',[
            'rawatinap' => Rawatinap::get(),
            'transaksi' => new Transaksi()
        ]);
    }
    
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->rawatinap_id = $request->rawatinap_id;
        $transaksi->jumlah_hari = $request->jumlah_hari;
        $transaksi->total_pembayaran = $this->total();
        $transaksi->save();
        Alert::success('Tersimpan','Data Berhasil Disimpan');
        return redirect()->route('transaksi.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
   
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        Alert::success('Terhapus','Data Berhasil Dihapus');
        return redirect()->route('transaksi.index');
    }
}

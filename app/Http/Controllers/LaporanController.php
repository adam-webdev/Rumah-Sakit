<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }
    public function cari(Request $request)
    {
        $periode = $request->periode;
        if($periode == "all"){
            $data = Transaksi::all();
            $pdf = PDF::loadview('laporan.print',compact('data','periode'))->setPaper('A4');
           return $pdf->stream('laporan-all.pdf');
        }else if($periode == "periode"){
        $tgl_awal = $request->awal;
        $tgl_akhir = $request->akhir;
        $data = Transaksi::whereBetween('created_at',[$tgl_awal,$tgl_akhir])
        ->orderBy('created_at','ASC')->get();
        $pdf = PDF::loadview('laporan.print',compact('data','periode','tgl_awal','tgl_akhir'))->setPaper('A4');
        return $pdf->stream('laporan-periode.pdf');
        }
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Dokter,Ruangan,Pasien,Supplier,Obat, Rawatinap, Transaksi};

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'dokter' => Dokter::count(),
            'pasien' => Pasien::count(),
            'supplier' => Supplier::count(),
            'obat' => Obat::count(),
            'ruangan' => Ruangan::count(),
            'rawatinap' => Rawatinap::count(),
            'transaksi' => Transaksi::count()
        ];
        return view('dashboard',$data);
    }
}

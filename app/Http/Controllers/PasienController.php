<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use Alert;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();         
        return view( 'pasien.pasien' , ['pasien'  => $pasien]); 
    }

    public function store(Request $request)
    {
        $save_pasien = new Pasien;        
        $save_pasien->nama = $request->get('nama_pasien');         
        $save_pasien->jenis_kelamin = $request->get('jenis_kelamin');         
        $save_pasien->alamat = $request->get('alamat');
        $save_pasien->telepon = $request->get('telepon');
        $save_pasien->riwayat_penyakit = $request->get('riwayat_penyakit');
        $save_pasien->save(); 
        Alert::success('Tersimpan','Data Berhasil Disimpan');
        return redirect()->route( 'pasien.index' ); 
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $pasien_edit = pasien::findOrFail($id);         
        return view( 'pasien.edit' , ['pasien'  => $pasien_edit]); 
    }

    public function update(Request $request, $id)
    {
      $pasien = Pasien::findOrFail($id);         
      $pasien->nama = $request->get('nama');         
      $pasien->jenis_kelamin = $request->get('jenis_kelamin');         
      $pasien->alamat = $request->get('alamat');
      $pasien->telepon = $request->get('telepon');
      $pasien->riwayat_penyakit = $request->get('riwayat_penyakit');
      $pasien->save(); 
      Alert::success('Terupdate','Data Berhasil Diupdate');
      return redirect()->route( 'pasien.index');
 
    }

  
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete(); 
        Alert::success('Terhapus','Data Berhasil Dihapus');
        return redirect()->route( 'pasien.index');
    }
}

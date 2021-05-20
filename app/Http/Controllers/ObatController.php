<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use Alert;
use App\Supplier;

class ObatController extends Controller
{
    public function index()
    {
        $data = [
            'obat' => Obat::with('supplier')->get(),
            'supplier' => Supplier::all()    
        ];
        return view('obat.index' , $data); 
    }

    public function store(Request $request)
    {
        $obat = new Obat;        
        $obat->supplier_id = $request->get('supplier_id');         
        $obat->nama_obat = $request->get('nama_obat');         
        $obat->harga_obat = $request->get('harga_obat');         
        $obat->fungsi_obat = $request->get('fungsi_obat');         
        $obat->stok_obat = $request->get('stok_obat');         
        $obat->save(); 
        Alert::success('Tersimpan','Data Berhasil Disimpan');
        return redirect()->route( 'obat.index' ); 
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id); 
        $supplier = Supplier::all();        
        return view('obat.edit' , compact('supplier','obat')); 
    }

    public function update(Request $request, $id)
    {
      $obat = Obat::findOrFail($id);         
      $obat->nama_obat = $request->get('nama_obat');         
      $obat->harga_obat = $request->get('harga_obat');
      $obat->fungsi_obat = $request->get('fungsi_obat');         
      $obat->stok_obat = $request->get('stok_obat');         
      $obat->supplier_id = $request->get('supplier_id');         
      $obat->save(); 
      Alert::success('Terupdate','Data Berhasil Diupdate');
      return redirect()->route('obat.index');
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete(); 
        Alert::success('Terhapus','Data Berhasil Dihapus');
        return redirect()->route('obat.index');
    }
}

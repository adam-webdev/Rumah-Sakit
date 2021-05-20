<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();         
        return view( 'supplier.supplier' , ['supplier'  => $supplier]); 
    }

    public function store(Request $request)
    {
        $supplier = new Supplier;        
        $supplier->nama = $request->get('nama');         
        $supplier->produk = $request->get('produk');         
        $supplier->harga = $request->get('harga');         
        $supplier->qty = $request->get('qty');         
        $supplier->alamat = $request->get('alamat');
        $supplier->telepon = $request->get('telepon');
        $supplier->save(); 
        Alert::success('Tersimpan','Data Berhasil Disimpan');
        return redirect()->route('supplier.index' ); 
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);         
        return view( 'supplier.edit' , ['supplier'  => $supplier]); 
    }

    public function update(Request $request, $id)
    {
      $supplier = Supplier::findOrFail($id);     
      $supplier->nama = $request->get('nama');         
      $supplier->produk = $request->get('produk');         
      $supplier->harga = $request->get('harga');         
      $supplier->qty = $request->get('qty');         
      $supplier->alamat = $request->get('alamat');
      $supplier->telepon = $request->get('telepon');
      $supplier->save(); 
      Alert::success('Terupdate','Data Berhasil Diupdate');
      return redirect()->route( 'supplier.index');
 
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete(); 
        Alert::success('Terhapus','Data Berhasil Dihapus');
        return redirect()->route( 'supplier.index');
    }
}

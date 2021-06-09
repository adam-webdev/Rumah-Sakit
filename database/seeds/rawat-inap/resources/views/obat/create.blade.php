@extends('layouts.layout') 
 
@section('content')        
<form action="{{route('obat.store')}}" method="POST"> 
@csrf   
  <fieldset>     
    <legend>Input Data Obat</legend>     
    <div class="form-group row">       
      <div class="col-md-5">
        <label for="kode_obat">Kode Obat</label>         
        <input id="kode_obat" type="text" name="kode_obat" class="form-control" required>       
      </div>     
      <div class="col-md-5">
        <label for="nama obat">Nama Obat</label>         
        <input id="nama_obat" type="text" name="nama_obat" class="form-control" required>       
      </div>     
    </div> 
    <div class="form-group row"> 
        <div class="col-md-5">         
          <label for="harga_obat">Harga Obat</label>         
          <input id="harga_obat" type="text" name="harga_obat" class="form-control" required>     
        </div> 
        <div class="col-md-5">         
          <label for="fungsi_obat">Fungsi Obat</label>         
          <input id="fungsi_obat" type="text" name="fungsi_obat" class="form-control" required>     
        </div> 
    </div>    
      <input type="submit" class="btn btn-success btn-send" value="Simpan" >       
      <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">     
  </fieldset> 
</form> 
@endsection
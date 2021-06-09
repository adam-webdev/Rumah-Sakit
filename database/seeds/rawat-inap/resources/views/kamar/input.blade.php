@extends('layouts.layout') 
 
@section('content')        
<form action="{{route('kamar.store')}}" method="POST" > 
@csrf   
  <fieldset>     
    <legend>Input Data Kamar</legend>     
    <div class="form-group row">       
      <div class="col-md-5">
        <label for="kelas">Nama Kamar</label>         
        <input id="kelas" type="text" name="kelas" class="form-control" required>       
      </div>     
      <div class="col-md-5">         
        <label for="tarif_perhari">Tarif Perhari</label>         
        <input id="tarif_perhari" type="text" name="tarif_perhari" class="form-control"required>     
      </div>     
    </div>  
      <input type="submit" class="btn btn-success btn-send" value="Simpan" >       
      <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">     
  </fieldset> 
</form> 
@endsection
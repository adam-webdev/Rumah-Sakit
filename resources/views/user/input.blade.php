@extends('layouts.layout') 
 
@section('content')        
<form action="{{route('user.store')}}" method="POST"> 
@csrf   
  <fieldset>     
    <legend>Input Data Pengguna</legend>     
    <div class="form-group row">       
     
      <div class="col-md-5">         
        <label for="email">Nama</label>         
        <input id="email" type="text" name="name" class="form-control" required autocomplete="off">       
      </div> 
      <div class="col-md-5">         
        <label for="email">Email</label>         
        <input id="email" type="email" name="email" class="form-control" required>       
      </div> 
      
    </div>     
    <div class="form-group row">         
      <div class="col-md-5">         
        <label for="passw">Password</label>         
        <input id="passw" type="password" name="passw" class="form-control" required autocomplete="off">       
      </div>       
      <div class="col-md-5">         
        <label for="kpassw">Konfirm Password</label>         
        <input id="kpassw" type="password" name="kpassw" class="form-control" required>       
      </div>     
    </div> 
   
        
    <div class="form-group row">         
      <div class="col-md-5">         
        <label for="tlp">Nomor Telpon</label>         
        <input id="tlp" type="text" name="tlp" class="form-control" required>       
      </div> 
      <div class="col-md-5">         
        <label for="alamat">Alamat</label>         
        <textarea id="alamat" name="alamat" class="form-control" required cols="30" rows="5%"></textarea>       
      </div>          
    </div>     
      <input type="submit" class="btn btn-success btn-send" value="Simpan" >       
      <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">     
  </fieldset> 
</form> 
@endsection 
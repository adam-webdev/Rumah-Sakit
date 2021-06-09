@extends('layouts.layout')

@section('content')
<form action="{{route('dokter.store')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Input Data Dokter</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="nama_dokter">Nama Dokter</label>
                <input id="nama_dokter" type="text" name="nama_dokter" class="form-control" required>
            </div>
            <div class="col-md-5">
                <label for="spesialis">Spesialis</label>
                <input id="spesialis" type="text" name="spesialis" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                  <option value="">--Pilih Jenis Kelamin--</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
              </select>
          </div>
          <div class="col-md-5">
              <label for="telepon">Nomor telepon</label>
              <input id="no_hp" type="text" name="no_hp" class="form-control" required>
          </div>
          
      </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="tarif">Tarif </label>
                <input id="tarif" type="text" name="tarif" class="form-control" required>
            </div>
          <div class="col-md-5">
              <label for="Alamat">Alamat</label>
              <textarea required id="alamat" type="text" name="alamat" cols="5" rows="5" class="form-control" required> </textarea>
          </div>
      </div>
        <input type="submit" class="btn btn-success btn-send" value="Simpan">
        <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">
    </fieldset>
</form>
@endsection

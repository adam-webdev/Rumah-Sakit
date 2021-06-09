@extends('layouts.layout')

@section('content')
<form action="{{route('pasien.store')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Input Data Pasien</legend>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="nama_pasien">Nama Pasien</label>
                <input id="nama_pasien" type="text" name="nama_pasien" class="form-control" required>
            </div>
        <div class="col-md-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
      </div>

        <div class="form-group row">
            <div class="col-md-6">
                <label for="telepon">Nomor telepon</label>
                <input id="telepon" type="text" name="telepon" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="riwayat_penyakit">Riwayat penyakit</label>
                <input id="riwayat_penyakit" type="text" name="riwayat_penyakit" class="form-control" required>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" type="text" name="alamat" cols="5" rows="5" class="form-control" required></textarea>
        </div>
      </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan">
            <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">
        </div>
    </fieldset>
</form>
@endsection

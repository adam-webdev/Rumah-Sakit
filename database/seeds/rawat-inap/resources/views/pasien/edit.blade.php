@extends('layouts.layout')

@section('content')
<form action="{{route('pasien.update', [$pasien->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Input Data Pasien</legend>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="nama_pasien">Nama Pasien</label>
                <input id="nama_pasien" type="text" name="nama_pasien" class="form-control"
                  required  value="{{$pasien->nama_pasien}}">
            </div>
            <div class="col-md-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                    <option value="{{$pasien->jenis_kelamin}}">{{$pasien->jenis_kelamin}}</option>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="telepon">Nomor telepon</label>
                <input id="telepon" type="text" name="telepon" required class="form-control" value="{{$pasien->telepon}}">
            </div>
            <div class="col-md-6">
                <label for="riwayat_penyakit">Riwayat penyakit</label>
                <input id="riwayat_penyakit" type="text" required name="riwayat_penyakit" class="form-control"
                    value="{{$pasien->riwayat_penyakit}}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" type="text" required name="alamat" cols="5" rows="5" class="form-control" required
                    value="{{$pasien->alamat}}">{{$pasien->alamat}}</textarea>
            </div>
        </div>

        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Update">
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div>
    </fieldset>
</form>
@endsection

@extends('layouts.layout')

@section('content')
<form action="{{route('dokter.update', [$dokter->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Input Data Dokter</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="nama_dokter">Nama Dokter</label>
                <input id="nama_dokter" type="text" name="nama_dokter" class="form-control"
                    value="{{$dokter->nama_dokter}}" required>
            </div>
            <div class="col-md-5">
                <label for="spesialis">Spesialis</label>
                <input id="spesialis" type="text" name="spesialis" class="form-control" required value="{{$dokter->spesialis}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                    <option value="{{$dokter->jenis_kelamin}}">{{$dokter->jenis_kelamin}}</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="telepon">Nomor telepon</label>
                <input id="no_hp" type="text" name="no_hp" class="form-control" required value="{{$dokter->no_hp}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="tarif">Tarif </label>
            <input required id="tarif" type="text" name="tarif" value="{{$dokter->tarif}} "class="form-control">
            </div>
            <div class="col-md-5">
                <label for="Alamat">Alamat</label>
                <textarea id="alamat" type="text" name="alamat" cols="5" required rows="5" class="form-control" required
                    value="{{$dokter->alamat}}">{{$dokter->alamat}}</textarea>
            </div>
        </div>
        <input type="submit" class="btn btn-success btn-send" value="Update">
        <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
    </fieldset>
</form>
@endsection

@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<form action="{{route('ruangan.update', [$ruangan->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Ubah Data Ruangan</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="nama_ruangan">Nama Ruangan</label>
                <input id="nama_ruangan" type="text" name="nama_ruangan" required class="form-control" value="{{$ruangan->nama_ruangan}}">
            </div>
            <div class="col-md-5">
                <label for="tarif_perhari">Tarif Perhari</label>
                <input id="tarif_perhari" type="text" required name="tarif_perhari" class="form-control"
                    value="{{$ruangan->tarif_perhari}}">
            </div>
            <div class="col-md-5">
                <label for="stok_ruangan">Stok Ruangan</label>
                <input id="stok_ruangan" type="number" name="stok_ruangan" required class="form-control" value="{{$ruangan->stok_ruangan}}">
            </div>
        </div>
        <input type="submit" class="btn btn-success btn-send" value="Update">
        <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
    </fieldset>
</form>
@endsection

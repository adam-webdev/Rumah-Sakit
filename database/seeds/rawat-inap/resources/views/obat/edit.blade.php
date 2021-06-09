@extends('layouts.layout')

@section('content')
<form action="{{route('obat.update', [$obat->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Input Data Obat</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="kode_obat">Kode Obat</label>
                <input id="kode_obat" type="text" required name="kode_obat" class="form-control" value="{{$obat->id}}">
            </div>
            <div class="col-md-5">
                <label for="nama_obat">Nama Obat</label>
                <input id="nama_obat" type="text" required name="nama_obat" class="form-control" value="{{$obat->nama_obat}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="harga_obat">Harga Obat</label>
                <input id="harga_obat" type="text" required name="harga_obat" class="form-control"
                    value="{{$obat->harga_obat}}">
            </div>
            <div class="col-md-5">
                <label for="fungsi_obat">Fungsi Obat</label>
                <input id="fungsi_obat" type="text" required name="fungsi_obat" class="form-control"
                    value="{{$obat->fungsi_obat}}">
            </div>
        </div>
        <input type="submit" class="btn btn-success btn-send" value="Update">
        <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
    </fieldset>
</form>
@endsection

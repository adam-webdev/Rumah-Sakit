@extends('layouts.layout')

@section('content')
<form action="{{route('kamar.update', [$kamar->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Input Data Pasien</legend>
        <div class="form-group row">

            <div class="col-md-5">
                <label for="kelas">Nama Kamar</label>
                <input id="kelas" type="text" name="kelas" required class="form-control" value="{{$kamar->kelas}}">
            </div>
            <div class="col-md-5">
                <label for="tarif_perhari">Tarif Perhari</label>
                <input id="tarif_perhari" type="text" required name="tarif_perhari" class="form-control"
                    value="{{$kamar->tarif_perhari}}">
            </div>
        </div>
        <input type="submit" class="btn btn-success btn-send" value="Update">
        <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
    </fieldset>
</form>
@endsection

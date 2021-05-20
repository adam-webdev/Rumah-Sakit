@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<form action="{{route('transaksi.store')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Data Transaksi</legend>
        <div class="form-group row">
            <div class="col-md-5">
            <label for="pasien">Pasien</label>
            <select type="text" name="rawatinap_id" class="form-control" id="rawatinap_id">
                <option>Pilih Pasien</option>
                @foreach ($rawatinap as $p)
                    <option value="{{$p->id}}">{{$p->pasien->nama}}</option>
                @endforeach
            </select>
            </div> 
            <div class="col-md-5">
                <label for="dokter">Jumlah Hari Rawat Inap</label>
                <input type="text" name="jumlah_hari" class="form-control" id="jumlah_hari" required>
            </div>
        </div>
        
        <input type="Button" class="btn btn-secondary btn-send" value="Kembali" onclick="history.go(-1)">
        <input type="submit"  class="btn btn-primary btn-send" value="Simpan">
    </fieldset>
</form>
@endsection

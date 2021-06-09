@extends('layouts.layout')
@section('content')
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
                    <option value="{{$p->id}}">{{$p->pasien->nama_pasien}}</option>
                @endforeach
            </select>
            </div> 
            <div class="col-md-5">
                <label for="dokter">Jumlah Hari Rawat Inap</label>
                <input type="text" name="jumlah_hari" class="form-control" id="jumlah_hari" required>
            </div>
        </div>
        
        <input type="submit" class="btn btn-success btn-send" value="Simpan">
        <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">
    </fieldset>
</form>
@endsection

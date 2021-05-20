@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
    <form action="{{route('rawatinap.update',[$rawatinap->id])}}" method="POST">
        @csrf
    <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Data Rawat Inap</legend>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="pasien">Nama Pasien </label>
                    <select name="nama" class="form-control select" id="pasien" required>
                        <option  value="{{$rawatinap->pasien->id}}">{{$rawatinap->pasien->nama}}</option>
                        @foreach ($pasien as $p)
                        <option value="{{$p->id}}">{{$p->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="dokter">Nama Dokter </label>
                    <select  name="nama_dokter" class="form-control select" id="dokter" required>
                        <option value="{{$rawatinap->dokter->id}}">{{$rawatinap->dokter->nama_dokter}}</option>
                        @foreach ($dokter as $d)
                        <option value="{{$d->id}}">{{$d->nama_dokter}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-md-6">
                    <label for="kamar">Nama Ruangan </label>
                    <select name="nama_ruangan" class="form-control select" id="kamar" required>
                        <option value="{{$rawatinap->ruangan->id}}">{{$rawatinap->ruangan->nama_ruangan}}</option>
                        @foreach ($ruangan as $k)
                        <option value="{{$k->id}}">{{$k->nama_ruangan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="obat">Nama Obat </label>
                    <select multiple="multiple" name="nama_obat[]" class="form-control select" id="obat" required>
                        @foreach ($rawatinap->obat as $item)
                        <option selected value="{{$item->id}}">{{$item->nama_obat}}
                        </option>
                        @endforeach
                        @foreach ($obat as $o)
                        <option value="{{$o->id}}">{{$o->nama_obat}}</option>
                        @endforeach
                    </select>
                  
                </div>
            </div>
            <input type="submit" class="btn btn-success btn-send" value="Simpan">
            <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">
        </fieldset>
    </form>
@endsection
@section('scripts')
     <script>
        $(document).ready(function() {
            $('.select').select2({
                tags:true,
                width:'resolve'
            });
        });
    </script>   
@endsection

@extends('layouts.layout')
@section('content')
<form action="{{route('rawatinap.store')}}" method="POST">
    @csrf
        <legend>Data Rawat Inap</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="pasien"> Id Pasien </label>
                <select  type="text" name="name_pasien" class="form-control mb-2" id="pasien">
                    @foreach ($pasien as $p)
                    <option  value="{{$p->id}}">
                        {{$p->nama_pasien}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="dokter">Id Dokter </label>
                <select  type="text" name="name_dokter" class="form-control" id="dokter">
                    @foreach ($dokter as $d)
                    <option value="{{$d->id}}">
                        {{$d->nama_dokter}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-md-5">
                <label for="kamar">ID Ruangan </label>
                <select  type="text" name="name_kamar" class="form-control" id="kamar">
                    @foreach ($kamar as $k)
                    <option value="{{$k->id}}">{{$k->kelas}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="obat">Nama Obat</label>
                <select  multiple="multiple" type="text" name="name_obat[]" class="form-control select2" id="obat">
                    @foreach ($obat as $o)
                    <option  value="{{$o->id}}">
                        {{$o->nama_obat}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-success btn-send" value="Simpan">
        <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">
    
</form>
@endsection
@section('scripts')
     <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>   
@endsection

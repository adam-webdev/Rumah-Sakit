@extends('layouts.layout')
@section('content')
    <form action="{{route('rawatinap.update',[$rawatinap->id])}}" method="POST">
        @csrf
    <input type="hidden" name="_method" value="PUT">
            
        <fieldset>
            <legend>Data Rawat Inap</legend>
            <small class="text-danger">Perhatian Kolom Id harus sama Dengan Kolom Nama!!</small>
            <div class="form-group row">
                <div class="col-md-5">
                    <label for="pasien"> Nama Pasien </label>
                    <select type="text" name="name_pasien" class="form-control mb-2" id="pasien">
                        @foreach ($pasien as $p)
                        <option value="{{old($p->id)}}">{{$p->nama_pasien}}</option>
                        @endforeach
                    </select>
                    {{-- <label for="pasien">Nama Pasien </label>
                    <select type="text" name="nama_pasien" class="form-control" id="pasien">
                        @foreach ($pasien as $p)
                        <option value="{{$p->nama_pasien}}">{{$p->nama_pasien}}</option>
                        @endforeach
                    </select> --}}
                </div>
                <div class="col-md-5">
                    <label for="dokter">Nama Dokter </label>
                    <select type="text" name="name_dokter" class="form-control" id="dokter">
                        @foreach ($dokter as $d)
                        <option value="{{$d->id}}">{{$d->nama_dokter}}</option>
                        @endforeach
                    </select>
                    {{-- <label for="dokter">Nama Dokter</label>
                    <select type="text" name="tarif_dokter" class="form-control" id="dokter">
                        @foreach ($dokter as $d)
                        <option value="{{$d->tarif}}">{{$d->nama_dokter}}</option>
                        @endforeach
                    </select> --}}
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-md-5">
                    <label for="kamar">Nama Ruangan </label>
                    <select type="text" name="name_kamar" class="form-control" id="kamar">
                        @foreach ($kamar as $k)
                        <option value="{{$k->id}}">{{$k->kelas}}</option>
                        @endforeach
                    </select>
                    {{-- <label for="kamar">Nama Ruangan</label>
                    <select type="text" name="tarif_kamar" class="form-control" id="kamar">
                        @foreach ($kamar as $k)
                        <option value="{{$k->tarif_perhari}}">{{$k->kelas}}</option>
                        @endforeach
                    </select> --}}
                </div>
                <div class="col-md-5">
                    {{-- <label for="kamar">Id Obat</label>
                    <select type="text" name="harga_obat" class="form-control" id="obat">
                        @foreach ($obat as $o)
                        <option  value="{{$o->harga_obat}}">{{$o->nama_obat}}</option>
                        @endforeach
                    </select> --}}
                    <label for="kamar">Nama Obat</label>
                    <select type="text" name="name_obat" class="form-control" id="obat">
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

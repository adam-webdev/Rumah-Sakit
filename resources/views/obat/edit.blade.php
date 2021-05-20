@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<form action="{{route('obat.update', [$obat->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Edit Data Obat</legend>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="nama_obat">Nama Obat</label>
                <input id="nama_obat" type="text" required name="nama_obat" class="form-control" value="{{$obat->nama_obat}}">
            </div>
            <div class="col-md-6">
                <label for="stok_obat">Stok Obat</label>
                <input id="stok_obat" type="text" required name="stok_obat" class="form-control" value="{{$obat->stok_obat}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="harga_obat">Harga Obat</label>
                <input id="harga_obat" type="text" required name="harga_obat" class="form-control"
                    value="{{$obat->harga_obat}}">
            </div>
            <div class="col-md-6">
                <label for="fungsi_obat">Fungsi Obat</label>
                <input id="fungsi_obat" type="text" required name="fungsi_obat" class="form-control"
                    value="{{$obat->fungsi_obat}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="supplier">Supplier</label>
                <select  type="text" name="supplier_id" class="form-control mb-2" id="supplier">
                    <option selected value="{{$obat->supplier->id}}">
                        {{$obat->supplier->nama}}
                    </option>
                    @foreach ($supplier as $item)
                    @if($item->id !== $obat->supplier->id)
                    <option value="{{$item->id}}">
                        {{$item->nama}}
                    </option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-success btn-send" value="Update">
        <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
    </fieldset>
</form>
@endsection

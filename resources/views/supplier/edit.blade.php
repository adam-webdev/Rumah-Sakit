@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<form action="{{route('supplier.update', [$supplier->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Edit Data Supplier</legend>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="nama">Nama Supplier :</label>
                <input id="nama" type="text" name="nama" class="form-control"
                  required  value="{{$supplier->nama}}">
            </div>
            <div class="col-md-6">
                <label for="produk"> Nama Produk :</label>
                <input id="produk" type="text" name="produk" class="form-control"
                  required  value="{{$supplier->produk}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="telepon">Nomor telepon : </label>
                <input id="telepon" type="text" name="telepon" required class="form-control" value="{{$supplier->telepon}}">
            </div>
            <div class="col-md-6">
                <label for="qty">Qty :</label>
                <input id="qty" type="text" required name="qty" class="form-control"
                    value="{{$supplier->qty}}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <label for="harga">Harga :</label>
                <input id="harga" type="text" required name="harga" class="form-control"
                    value="{{$supplier->harga}}">
            </div>
            <div class="col-md-6">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" type="text" required name="alamat" cols="5" rows="5" class="form-control" required
                    value="{{$supplier->alamat}}">{{$supplier->alamat}}</textarea>
            </div>
        </div>

        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Update">
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div>
    </fieldset>
</form>
@endsection

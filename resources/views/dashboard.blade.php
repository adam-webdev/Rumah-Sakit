@extends('layouts.layout')
@section('content')

<h3>Dashboard</h3>
<div class="row mt-4">
    <div class="col-md-3">
    <a class="text-white" href="{{route('dokter.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style="background: linear-gradient(to right, #ff0066 0%, #ff0000 100%);">
            <div class="row">
                <h4 class="mr-4">Dokter</h4>
                <h1>{{$dokter}}</h1>
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-3">
        <a class="text-white" href="{{route('supplier.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style=" background: linear-gradient(to right, #ff5050 0%, #ff6600 100%);">
            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
            <div class="row">
                <h4 class="mr-4">Supplier</h4>
                <h1>{{$supplier}}</h1>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a class="text-white" href="{{route('pasien.index')}}" style="text-decoration:none;">
        <div class="card p-4" style="background: linear-gradient(to top left, #ff6699 0%, #ff6600 100%);">
            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
            <div class="row">
                <h4 class="mr-4">Pasien</h4>
                <h1>{{$pasien}}</h1>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a class="text-white" href="{{route('ruangan.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style="background: linear-gradient(to top left, #ff5050 0%, #ff9933 100%);">
            <div class="row">
                <h4 class="mr-4">Ruangan</h4>
                <h1>{{$ruangan}}</h1>
            </div>
        </div>
        </a>
    </div>
</div>
<div class="row mt-4">

    <div class="col-md-3">
        <a class="text-white" href="{{route('obat.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style="background: linear-gradient(to top left, #ff6699 0%, #ff0000 100%);">
            <div class="row">
                <h4 class="mr-4">Obat</h4>
                <h1>{{$obat}}</h1>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a class="text-white" href="{{route('rawatinap.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style=" background: linear-gradient(to top right, #ff0066 0%, #ff0000 100%);">
            <div class="row">
                <h4 class="mr-4">Rawat Inap</h4>
                <h1>{{$rawatinap}}</h1>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a class="text-white" href="{{route('transaksi.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style="background: linear-gradient(to right, #ff3399 0%, #ff3300 100%);">
            <div class="row">
                <h4 class="mr-4">Transaksi</h4>
                <h1>{{$transaksi}}</h1>
            </div>
        </div>
        </a>
    </div>
</div>





@endsection
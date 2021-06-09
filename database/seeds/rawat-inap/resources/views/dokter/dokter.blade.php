@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Dokter</h1>
    <a href="{{route('dokter.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Jenis Kelamin</th>
                        <th>Tarif</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dokter as $dokter)
                    <tr>
                        <td>{{$dokter->nama_dokter}}</td>
                        <td>{{$dokter->spesialis}}</td>
                        <td>{{$dokter->jenis_kelamin}}</td>
                        <td>{{$dokter->tarif}}</td>
                        <td>{{$dokter->no_hp}}</td>
                        <td>{{$dokter->alamat}}</td>
                        <td align="center">
                            <a href="{{route( 'dokter.edit' ,[$dokter->id])}}"
                              data-toggle="tooltip" title="Edit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>
                            </a>
                            <a href="/dokter/hapus/{{ $dokter->id }}"
                              data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin Ingin menghapus data?')"
                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> 
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

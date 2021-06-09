@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Obat</h1>
    <a href="{{route('obat.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Harga Obat</th>
                        <th>Fungsi Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $obat)
                    <tr>
                        <td>{{$obat->id}}</td>
                        <td>{{$obat->nama_obat}}</td>
                        <td>{{$obat->harga_obat}}</td>
                        <td>{{$obat->fungsi_obat}}</td>
                        <td align="center">
                            <a href="{{route( 'obat.edit' ,[$obat->id])}}"
                              data-toggle="tooltip" title="Edit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> 
                            </a>
                            <a href="/obat/hapus/{{ $obat->id }}"
                              data-toggle="tooltip" title="Hapus"  onclick="return confirm('Yakin Ingin menghapus data?')"
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

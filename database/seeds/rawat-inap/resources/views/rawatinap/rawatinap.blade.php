@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Rawat Inap</h1>
        <a href="{{route('rawatinap.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a> 
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No Rawat Inap</th>
                        <th>Pasien</th>
                        <th>Ruangan</th>
                        <th>Dokter</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rawatinap as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->pasien->nama_pasien}}</td>
                        <td>{{$r->kamar->kelas}}</td>
                        <td>{{$r->dokter->nama_dokter}}</td>
                        {{-- Format Rupiah @currency($r->dokter->tarif) --}}
                 
                        <td align="center">
                            {{-- <a href="{{route( 'rawatinap.edit' ,[$r->id])}}"
                              data-toggle="tooltip" title="Edit"  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> 
                            </a> --}}
                            <a href="/rawatinap/hapus/{{ $r->id }}"
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

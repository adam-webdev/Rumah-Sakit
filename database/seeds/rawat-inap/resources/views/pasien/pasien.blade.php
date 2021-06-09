@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
    <a href="{{route('pasien.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a> 
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">

                        <th width="5%">No</th>
                        <th>Nama Pasien</th>
                        <th >Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Riwayat Penyakit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $pasien)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pasien->nama_pasien}}</td>
                        <td>{{$pasien->jenis_kelamin}}</td>
                        <td>{{$pasien->alamat}}</td>
                        <td>{{$pasien->telepon}}</td>
                        <td>{{$pasien->riwayat_penyakit}}</td>
                        <td align="center">
                            <a href="{{route( 'pasien.edit' ,[$pasien->id])}}"
                              data-toggle="tooltip" title="Edit"  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> 
                            </a>
                            <a href="/pasien/hapus/{{ $pasien->id }}"
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

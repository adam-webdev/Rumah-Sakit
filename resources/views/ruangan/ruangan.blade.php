@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Ruangan</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
    </button>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Ruangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ action('RuanganController@store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_ruangan">Nama Ruangan :</label>
                    <input type="text" name="nama_ruangan"  class="form-control" maxlegth="5" id="nama_ruangan">
                </div>
                <div class="form-group">
                    <label for="tarif_perhari">Tarif perhari :</label>
                    <input type="text" name="tarif_perhari"  class="form-control" id="tarif_perhari">
                </div>
                <div class="form-group">
                    <label for="stok_ruangan">Stok Ruangan :</label>
                    <input type="number" name="stok_ruangan" class="form-control" id="stok_ruangan">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary btn-send" value="Simpan">
            </div>
        </div>
    </form>
    </div>
  </div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Nama Ruangan</th>
                        <th>Tarif perhari</th>
                        <th>Stok Ruangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ruangan as $kamar)
                    <tr>
                        <td>{{$kamar->nama_ruangan}}</td>
                        <td>{{$kamar->tarif_perhari}}</td>
                        <td>{{$kamar->stok_ruangan}}</td>
                        <td align="center">
                            <a href="{{route( 'ruangan.edit' ,[$kamar->id])}}"
                              data-toggle="tooltip" title="Edit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> 
                            </a>
                            <a href="/ruangan/hapus/{{ $kamar->id }}"
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

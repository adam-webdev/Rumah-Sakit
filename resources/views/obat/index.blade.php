@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Obat</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
    </button>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ action('ObatController@store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_obat">Nama Obat :</label>
                    <input type="text" name="nama_obat"  class="form-control" maxlegth="5" id="nama_obat" required>
                </div>
                <div class="form-group">
                    <label for="harga_obat">Harga Obat :</label>
                    <input type="text" name="harga_obat"  class="form-control" maxlegth="5" id="harga_obat" required>
                </div>
                <div class="form-group">
                    <label for="fungsi_obat">Fungsi Obat :</label>
                    <input type="text" name="fungsi_obat"  class="form-control" maxlegth="5" id="fungsi_obat" required>
                </div>
                <div class="form-group">
                    <label for="stok_obat">Stok Obat :</label>
                    <input type="text" name="stok_obat"  class="form-control" maxlegth="5" id="stok_obat" required>
                </div>
                <div class="form-group">
                    <label for="supplier">Supplier</label>
                    <select  type="text" name="supplier_id" class="form-control mb-2" id="supplier">
                        @foreach ($supplier as $s)
                        <option  value="{{$s->id}}">
                            {{$s->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
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
                        <th>Supplier</th>
                        <th>Nama Obat</th>
                        <th>Harga Obat</th>
                        <th>Fungsi Obat</th>
                        <th>Stok Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $obat)
                    <tr>
                        <td>{{$obat->supplier->nama}}</td>
                        <td>{{$obat->nama_obat}}</td>
                        <td>@currency($obat->harga_obat)</td>
                        <td>{{$obat->fungsi_obat}}</td>
                        <td>{{$obat->stok_obat}}</td>
                        <td align="center">
                            <a href="{{route('obat.edit' ,[$obat->id])}}"
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

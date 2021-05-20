@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Supplier</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    + Tambah
    </button>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ action('SupplierController@store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="dokter">Nama Supplier :</label>
                    <input type="text" name="nama"  class="form-control" maxlegth="5" id="dokter">
                </div>
                <div class="form-group">
                    <label for="produk">Produk :</label>
                    <input type="text" name="produk"  class="form-control" id="produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga :</label>
                    <input type="number" name="harga" class="form-control" id="harga">
                </div>
                <div class="form-group">
                    <label for="qty">Qty :</label>
                    <input type="number" name="qty" class="form-control" id="qty">
                </div>
                <div class="form-group">
                    <label for="telepon">No Handphone :</label>
                    <input type="number" name="telepon" class="form-control" id="telepon">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" class="form-control" rows="5" id="alamat"></textarea>
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
{{-- modal tambah dokter --}}

   
           
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Nama Supplier</th>
                        <th>Produk</th>
                        <th>Harga Produk</th>
                        <th>Qty</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supplier as $s)
                    <tr>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->produk}}</td>
                        <td>@currency($s->harga)</td>
                        <td>{{$s->qty}}</td>
                        <td>{{$s->telepon}}</td>
                        <td>{{$s->alamat}}</td>
                        <td align="center" width="10%">
                            <a href="{{route('supplier.edit' ,[$s->id])}}" data-toggle="tooltip" title="Edit"
                                class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>
                            </a>
                            <a href="/supplier/hapus/{{$s->id}}" data-toggle="tooltip" title="Hapus" title="Hapus"
                                onclick="return confirm('Yakin Ingin menghapus data?')"
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

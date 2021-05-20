@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Dokter</h1>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Dokter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ action('DokterController@store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="dokter">Nama Dokter :</label>
                    <input type="text" name="nama_dokter"  class="form-control" maxlegth="5" id="dokter">
                </div>
                <div class="form-group">
                    <label for="spesialis">Spesialis :</label>
                    <input type="text" name="spesialis"  class="form-control" id="spesialis">
                </div>
                <div class="form-group">
                    <label for="tarif">Tarif :</label>
                    <input type="number" name="tarif" class="form-control" id="tarif">
                </div>
                <div class="form-group">
                    <label for="jenisKelamin">Jenis Kelamin :</label>
                    <select class="form-control" name="jenis_kelamin" id="jenisKelamin">
                        <option disabled selected>-- pilih jenis kelamin --</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="noHp">No Handphone :</label>
                    <input type="number" name="no_hp"class="form-control" id="noHp">
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
                        <td align="center" width="10%">
                            <a href="{{route('dokter.edit' ,[$dokter->id])}}" data-toggle="tooltip" title="Edit"
                                class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>
                            </a>
                            <a href="/dokter/hapus/{{$dokter->id}}" data-toggle="tooltip" title="Hapus" 
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

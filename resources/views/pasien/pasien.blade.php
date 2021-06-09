@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
    </button>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ action('PasienController@store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_pasien">Nama Pasien :</label>
                    <input type="text" name="nama_pasien"  class="form-control" maxlegth="5" id="nama_pasien" required>
                </div>
                <div class="form-group">
                    <label for="jenisKelamin">Jenis Kelamin :</label>
                    <select class="form-control" name="jenis_kelamin" id="jenisKelamin" required>
                        <option disabled selected>-- pilih jenis kelamin --</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telepon">No Handphone :</label>
                    <input type="number" name="telepon" class="form-control" id="telepon" required>
                </div>
                <div class="form-group">
                    <label for="riwayat_penyakit">Riwayat Penyakit :</label>
                    <input type="text" name="riwayat_penyakit" class="form-control" id="riwayat_penyakit" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" class="form-control" rows="5" id="alamat" required></textarea>
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
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Riwayat Penyakit</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $pasien)
                    <tr>
                        <td>{{$pasien->nama}}</td>
                        <td>{{$pasien->jenis_kelamin}}</td>
                        <td>{{$pasien->telepon}}</td>
                        <td>{{$pasien->riwayat_penyakit}}</td>
                        <td>{{$pasien->alamat}}</td>
                        <td align="center" width="10%">
                            <a href="{{route( 'pasien.edit' ,[$pasien->id])}}"
                              data-toggle="tooltip" title="Edit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
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

@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Rawat Inap</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
    </button>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rawat Inap</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ action('RawatinapController@store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama Pasien :</label>
                    <select style="width:100%"  name="pasien_id" id="nama" class="form-control select" required>
                        @foreach ($pasien as $p)
                        <option value="{{$p->id}}">{{$p->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="dokter">Nama Dokter :</label>
                    <select style="width:100%"  name="dokter_id" id="dokter" class="form-control select">
                        @foreach ($dokter as $d)
                        <option value="{{$d->id}}">{{$d->nama_dokter}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ruangan">Nama Ruangan :</label>
                    <select style="width:100%"  name="ruangan_id" id="ruangan" class="form-control select" required>
                        @foreach ($ruangan as $r)
                        <option value="{{$r->id}}">{{$r->nama_ruangan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="obat">Nama obat :</label>
                    <select style="width:100%" type="text" name="obat_id[]" id="obat" class="form-control select" multiple="multiple"  required>
                        @foreach ($data_rawatinap->obat as $item)
                        <option selected value="{{$item->id}}">{{$item->nama_obat}}</option>
                        @endforeach
                        @foreach ($obat as $o)
                        <option value="{{$o->id}}">{{$o->nama_obat}}</option>
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
                        <th>Pasien</th>
                        <th>Ruangan</th>
                        <th>Dokter</th>
                        <th>Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rawatinap as $rawatinap)
                    <tr>
                        <td>{{$rawatinap->pasien->nama}}</td>
                        <td>{{$rawatinap->dokter->nama_dokter}}</td>
                        <td>{{$rawatinap->ruangan->nama_ruangan}}</td>
                        <td>
                        @foreach ($rawatinap->obat as $item)
                            {{$item->nama_obat}} , 
                        @endforeach
                        </td>
                        <td align="center" width="10%">
                            <a href="{{route( 'rawatinap.edit' ,[$rawatinap->id])}}"
                              data-toggle="tooltip" title="Edit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> 
                            </a>
                            <a href="/rawatinap/hapus/{{ $rawatinap->id }}"
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
@section('scripts')
     <script>
        $(document).ready(function() {
            $('.select').select2({
                tags:true,
                width:'resolve'
            });
        });
    </script>   
@endsection
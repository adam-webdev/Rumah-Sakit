@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Data Rawatinap</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
    </button>
</div>
<div class="d-sm-flex align-items-center justify-content-between">
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
                    @foreach ($rawatinap as $r)
                    <tr>
                        <td>{{$r->pasien->nama}}</td>
                        <td>{{$r->ruangan->nama_ruangan}}</td>
                        <td>{{$r->dokter->nama_dokter}}</td>
                        <td>
                            @foreach ($r->obat as $item)
                            {{$item->nama_obat}}
                            @endforeach
                        </td>
                        {{-- Format Rupiah @currency($r->dokter->tarif) --}}
                 
                        <td align="center">
                            <a href="{{route('rawatinap.edit' ,[$r->id])}}"
                              data-toggle="tooltip" title="Edit"  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> 
                            </a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rawatinap</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('rawatinap.store')}}" method="POST">
            <div class="modal-body">
            @csrf
                <div class="form-group">
                    <label for="pasien"> Nama Pasien :</label>
                    <select name="nama" class="form-control select" style="width:100%" id="pasien" required>
                        @foreach ($pasien as $p)
                        <option value="{{$p->id}}">
                            {{$p->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="dokter">Nama Dokter </label>
                    <select style="width:100%" name="nama_dokter" class="form-control select" id="dokter" required>
                        @foreach ($dokter as $d)
                        <option value="{{$d->id}}">
                            {{$d->nama_dokter}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kamar">Nama Ruangan :</label>
                    <select style="width:100%"  name="nama_ruangan" class="form-control select" id="kamar" required>
                        @foreach ($ruangan as $k)
                        <option value="{{$k->id}}">{{$k->nama_ruangan}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="obat">Nama Obat :</label>
                    <select style="width:100%" name="nama_obat[]" multiple="multiple" type="text" class="form-control select" id="obat" required>
                        @foreach ($obat as $o)
                        <option value="{{$o->id}}">
                            {{$o->nama_obat}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="modal-footer">
                <input type="Button" class="btn btn-secondary btn-send" value="Batal" onclick="history.go(-1)">
                <input type="submit" class="btn btn-primary btn-send" value="Simpan">
            </div>
        </div>
        </form>
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


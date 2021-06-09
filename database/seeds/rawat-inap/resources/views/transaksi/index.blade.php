@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
        <a href="{{route('transaksi.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a> 
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No Rawat Inap</th>
                        <th>Tanggal</th>
                        <th>Nama Pasien</th>
                        <th>Harga Dokter</th>
                        <th>Harga Obat </th>
                        <th>Harga Ruangan</th>
                        <th>Jumlah Hari</th>
                        <th>Total Pembayaran</th>
                        {{-- <th>Tanggal Masuk</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $r)
                    <tr>
                        <td>{{$r->rawatinap->id}}</td>
                        <td>{{$r->created_at}}</td>
                        <td>{{$r->rawatinap->pasien->nama_pasien}}</td>
                        <td>@currency($r->rawatinap->dokter->tarif) </td>
                        {{-- looping total obat --}}
                        
                        <td> @foreach ($r->rawatinap->obat as $o)
                            - {{$o->nama_obat}} <br> @currency($o->harga_obat) <br>
                            @endforeach
                        </td>
                        <td>@currency($r->rawatinap->kamar->tarif_perhari)</td>
                        <td> x {{$r->jumlah_hari}}</td>
                        <td>
                            @currency($r->rawatinap->dokter->tarif + $r->rawatinap->obat->sum('harga_obat') + ($r->rawatinap->kamar->tarif_perhari * $r->jumlah_hari)) 
                        </td>

                       
                        {{-- <td align="center">
                            <a href="#"
                            <a href="{{route( 'rawatinap.edit' ,[$r->id])}}"
                              data-toggle="tooltip" title="Edit"  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> 
                            </a>
                            <a href="#"
                            <a href="/rawatinap/hapus/{{ $r->id }}"
                              data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin Ingin menghapus data?')"
                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> 
                            </a>
                        </td> --}}
                    {{-- @endforeach --}}
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

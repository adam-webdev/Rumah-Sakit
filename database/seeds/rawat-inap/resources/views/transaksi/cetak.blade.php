<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Hello adam
    
</h1>
    {{-- 	
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
                        <th>Harga Ruangan</th>
                        <th>Harga Obat </th>
                        <th>Jumlah Hari</th>
                        <th>Total Pembayaran</th>
                        {{-- <th>Tanggal Masuk</th> --}}
                    {{-- </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $r)
                    <tr>
                        {{-- @currency($r->dokter->tarif) --}}
                        {{-- <td>{{$r->rawatinap->id}}</td>
                        <td>{{$r->created_at}}</td>
                        <td>{{$r->rawatinap->nama_pasien}}</td>
                        <td>@currency($r->rawatinap->tarif_dokter) </td>
                        <td>@currency($r->rawatinap->tarif_kamar) </td>
                        <td>@currency($r->rawatinap->harga_obat) </td>
                        <td>{{$r->jumlah_hari}}</td>
                        <td>@currency($r->rawatinap->tarif_dokter + $r->rawatinap->harga_obat +($r->rawatinap->tarif_kamar * $r->jumlah_hari))</td> --}}
                  {{-- --}} 
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
                    {{-- </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
    
</body>
</html>

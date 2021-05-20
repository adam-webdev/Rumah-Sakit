<!DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>
	<style>
        .header{
            display: flex;
            position: relative;
            justify-content: space-between;
            width: 100%;
            align-items: center;
        }
        .text{
            margin-left: 250px;
            margin-top: -30px;
        }
        hr{
            margin-top:-100px;
            margin-bottom: 30px;
        }
        .right{
            margin-left:230px;
            margin-top:-35px;
            font-weight: bold;
        } 
        .obat{
            
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="asset/img/logo_ubsi.png" alt="logo" width="210px" height="140px" style="border-radius:50%; object-fit:contain" >
        <div class="text">
            <h2>Rumah Sakit Kebalen</h2>
            <p>Jl. Kalimalang Bekasi 17512</p>
            <p>Email : Kebalen@gmail.com Fax :202020</p>
        </div>
    </div>
<hr>
<h4>Kwitansi Pembayaran Pasien</h4> 
<p class="left">Tanggal : {{$today}} </p> <p class="right"></p>
<br>
<br>
<p class="btn btn-primary">No Rawat Inap </p> <p class="right">: {{$transaksi->rawatinap->id}}</p>
<p>Tanggal masuk </p> <p class="right">: {{$transaksi->rawatinap->created_at->format('d-m-Y')}}</p>
<p>Tanggal keluar </p> <p class="right">: {{$transaksi->created_at->format('d-m-Y')}}</p>
<p>Nama Pasien </p>  <p class="right">: {{$transaksi->rawatinap->pasien->nama}}</p>
<p>Biaya Dokter </p> <p class="right"> : @currency($transaksi->rawatinap->dokter->tarif)</p>
<p>Harga Obat </p> <p class="right obat">:   @foreach ($transaksi->rawatinap->obat as $o)
    {{$o->nama_obat}} <br> @currency($o->harga_obat) <br>
   @endforeach</p>
<p>Biaya Ruangan </p> <p class="right">:@currency($transaksi->rawatinap->ruangan->tarif_perhari)</p>
<p>Jumlah Hari</p> <p class="right">: {{$transaksi->jumlah_hari}} Hari</p>
<p>Rincian Biaya </p> <p class="right">: Biaya Dokter + Harga Obat + (Biaya Ruangan x Jumlah Hari)</p>

<p>Total Pembayaran </p> <p class="right">: @currency($transaksi->rawatinap->dokter->tarif + $transaksi->rawatinap->obat->sum('harga_obat') + ($transaksi->rawatinap->ruangan->tarif_perhari * $transaksi->jumlah_hari)) </p>















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
                    <tr>
                        <td width="5%">{{$transaksi->rawatinap->id}}</td>
                        <td>{{$today}}</td>
                        <td>{{$transaksi->rawatinap->pasien->nama}}</td>
                        <td>@currency($transaksi->rawatinap->dokter->tarif) </td>
                        {{-- looping total obat --}}
                        
                        {{-- <td> @foreach ($transaksi->rawatinap->obat as $o)
                            - {{$o->nama_obat}} <br> @currency($o->harga_obat) <br>
                            @endforeach
                        </td>
                        <td>@currency($transaksi->rawatinap->ruangan->tarif_perhari)</td>
                        <td> x {{$transaksi->jumlah_hari}}</td>
                        <td>
                            @currency($transaksi->rawatinap->dokter->tarif + $transaksi->rawatinap->obat->sum('harga_obat') + ($transaksi->rawatinap->ruangan->tarif_perhari * $transaksi->jumlah_hari)) 
                        </td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> --}} 
     
</body>
</html>

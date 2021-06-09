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
            margin-top: -120px;
            margin-bottom: -10px;
        }
        .right{
            margin-left:230px;
            margin-top:-35px;
            font-weight: bold;
        } 
        .obat{
            position: relative;
        }
        .watermark{
        margin: auto;
        top : 240px;
        left : 38%;
        display:block;
        object-fit:contain;
        position : absolute;
        opacity: 0.1;
        filter: alpha(opacity=20); 
    }
    .tanggal{
            margin-left:750px;
            top:120px;
            position: absolute;
    }
    .ttd
        {
            position: absolute;
            margin-left:85%;
        }
    </style>
</head>
<body>
    <div class="watermark">
        <img src="asset/img/logo_ubsi.png" alt="logo" width="400px" height="240px">
        </div>
    <div class="header">
        <img src="asset/img/logo_ubsi.png" alt="logo" width="210px" height="120px" style="border-radius:50%; object-fit:contain" >
        <div class="text">
            <h2>Rumah Sakit Kebalen</h2>
            <p>Jl. Kalimalang Bekasi 17512</p>
            <p>Email : Kebalen@gmail.com Fax :202020</p>
        </div>
    </div>
<hr>
<h4>Kwitansi Pembayaran Pasien</h4> 
<p class="left">Tanggal : {{$today}} </p> <p class="right"></p>
<div class="tanggal">
    <p>Tanggal masuk : {{$transaksi->rawatinap->created_at->isoFormat('dddd, D MMMM Y')}}</p>
    <p>Tanggal keluar : {{$transaksi->created_at->isoFormat('dddd, D MMMM Y')}}</p>
</div>
<br>
<br>
<p class="btn btn-primary">No Rawat Inap </p> <p class="right">: {{$transaksi->rawatinap->id}}</p>

<p>Nama Pasien </p>  <p class="right">: {{$transaksi->rawatinap->pasien->nama}}</p>
<p>Biaya Dokter </p> <p class="right"> : @currency($transaksi->rawatinap->dokter->tarif)</p>
<p>Harga Obat </p> <p class="right obat">:   @foreach ($transaksi->rawatinap->obat as $o)
    {{$o->nama_obat}} <br> @currency($o->harga_obat) <br>
   @endforeach</p>
<p>Biaya Ruangan </p> <p class="right">:@currency($transaksi->rawatinap->ruangan->tarif_perhari)</p>
<p>Jumlah Hari</p> <p class="right">: {{$transaksi->jumlah_hari}} Hari</p>
<p>Rincian Biaya </p> <p class="right">: Biaya Dokter + Harga Obat + (Biaya Ruangan x Jumlah Hari)</p>

<p>Total Pembayaran </p> <p class="right">: @currency($transaksi->rawatinap->dokter->tarif + $transaksi->rawatinap->obat->sum('harga_obat') + ($transaksi->rawatinap->ruangan->tarif_perhari * $transaksi->jumlah_hari)) </p>

<br>
<div class="ttd">
<p>Tanda Tangan</p>
<br>
<p>(  _ _ _ _ _ _ _ _ )</p>
<p>Administrasi </p>
</div>
</body>
</html>

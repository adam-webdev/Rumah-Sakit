<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{pasien,dokter,kamar,Transaksi,Obat};

class rawatinap extends Model
{
    protected $table = 'rawatinap';
    // protected $primarykey = "id";
    protected $guarded = [];

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }
    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }
    public function dokter()
    {
        return $this->belongsTo(dokter::class);
    }
    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
    public function obat()
    {
        return $this->belongsToMany(Obat::class);
    }
}

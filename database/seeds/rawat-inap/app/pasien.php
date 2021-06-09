<?php

namespace App;

use App\{rawatinap,Transaksi};
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = 'pasien';
    protected $guarded = [];

    public function rawatinap()
    {
      return $this->hasOne(rawatinap::class);
    }
    // public function rawatTransaksi()
    // {
    //     return $this->hasOneThrough(Transaksi::class, rawatinap::class);
    // }
    // public function transaksi()
    // {
    //     return $this->hasOneThrough(Transaksi::class,rawatinap::class);
    // }
}

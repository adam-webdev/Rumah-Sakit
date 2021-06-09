<?php

namespace App;

use App\{rawatinap,Transaksi};
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = 'dokter';
    protected $guarded = [];
    public function rawatinap()
    {
        return $this->hasOne(rawatinap::class);
    }
    // public function rawatinapTransaksi()
    // {
    //     return $this->hasOneThrough(Transaksi::class, rawatinap::class);
    // }
    // public function transaksi()
    // {
    //     return $this->hasOneThrough(Transaksi::class,rawatinap::class);
    // }
}

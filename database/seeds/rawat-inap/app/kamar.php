<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{rawatinap,Transaksi};

class kamar extends Model
{
    protected $table = 'kamar';
    protected $guarded = [];
    public function rawatinap()
    {
        return $this->hasOne(rawatinap::class);
    }
    // public function inapTransaksi()
    // {
    //     return $this->hasOneThrough(Transaksi::class, rawatinap::class);
 
    // }
    // public function transaksi()
    // {
    //     return $this->hasOneThrough(Transaksi::class,rawatinap::class);
    // }
}

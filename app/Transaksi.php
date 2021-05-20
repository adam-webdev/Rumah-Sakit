<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    public function rawatinap()
    {
        return $this->belongsTo(Rawatinap::class);
    }
}

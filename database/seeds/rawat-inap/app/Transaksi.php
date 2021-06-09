<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{rawatinap,dokter,pasien,kamar};

class Transaksi extends Model
{
    protected $table= 'transaksi';
    protected $guarded = [];
    public function rawatinap()
    {
        return $this->belongsTo(rawatinap::class);
    }
    
}

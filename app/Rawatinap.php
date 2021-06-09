<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rawatinap extends Model
{
    protected $table = 'rawatinaps';
    protected $fillable = ['pasien_id','ruangan_id','dokter_id','qty','qty_ruangan'];

    public function obat(){
        return $this->belongsToMany(Obat::class);
    }
    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }
    public function ruangan(){
        return $this->belongsTo(Ruangan::class);
    }
    public function transaksi(){
        return $this->hasOne(Transaksi::class);
    }
}

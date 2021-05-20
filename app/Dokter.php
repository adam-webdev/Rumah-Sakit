<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';
    public function rawatinap()
    {
        return $this->hasOne(Rawatinap::class);
    }
}

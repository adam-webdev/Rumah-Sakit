<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public function rawatinap()
    {
        return $this->hasOne(Rawatinap::class);
    }
}

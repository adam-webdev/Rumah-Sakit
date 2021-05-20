<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangans';
    public function rawatinap()
    {
        return $this->hasOne(Rawatinap::class);
    }
}

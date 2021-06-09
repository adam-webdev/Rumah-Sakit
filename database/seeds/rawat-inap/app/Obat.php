<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\rawatinap;

class Obat extends Model
{
    protected $table = 'obat';
    protected $guarded = [];

    public function rawatinap()
    {
        return $this->belongsToMany(rawatinap::class);
    }
}

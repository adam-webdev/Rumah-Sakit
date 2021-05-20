<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    public function obat()
    {
        return $this->belongsTo(Obats::class);
    }
}

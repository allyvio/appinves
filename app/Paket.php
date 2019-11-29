<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    //
    protected $table = 'paket';

    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class);
    }
}

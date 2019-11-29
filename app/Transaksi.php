<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi';

    public function paket()
    {
        return $this->belongsToMany(Paket::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

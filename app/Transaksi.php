<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    Protected $table = 'transaksi';
    public $timestamps = false;

    public function peminjam(){
        return $this->belongsTo(Peminjam::class);

    }

    
    public function barang(){
        return $this->belongsTo(Barang::class);

    }
}

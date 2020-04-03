<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table ="transaksis";
    protected $fillable=['nama','user_id','handphone','peserta','harga','paket','tanggal','konfirmasi',];
}


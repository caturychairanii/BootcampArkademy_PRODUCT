<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    public $timestamps = false;
    public $primaryKey = "id";
    protected $fillable = ['nama_produk','keterangan','harga','jumlah'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
   protected $table = 'table_produk';
   protected $primaryKey = 'id_produk';
   protected $fillable = ['nama','icon','deskripsi','harga'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'table_datapesanan';
   protected $primaryKey = 'id_pesanan';
   protected $fillable = ['nama','alamat','id_produk','jumlah','tgl_pesanan'];
}

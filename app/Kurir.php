<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $table = "table_kurir";
    protected $primaryKey = 'id_kurir';
    protected $fillable = ['nama_kurir','email_kurir','no_kurir','photo','jenis','password_kurir'];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDatapesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_datapesanan', function (Blueprint $table) {
            $table->bigIncrements('id_pesanan');
            $table->string('nama',250);
            $table->string('alamat',250);
            $table->integer('id_produk');
            $table->string('jumlah',50);
            $table->date('tgl_pesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_datapesanan');
    }
}

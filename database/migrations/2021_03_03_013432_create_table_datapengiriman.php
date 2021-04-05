<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDatapengiriman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_datapengiriman', function (Blueprint $table) {
            $table->bigIncrements('id_pengiriman');
            $table->integer('id_pesanan');
            $table->integer('id_kurir');
            $table->string('status',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_datapengiriman');
    }
}

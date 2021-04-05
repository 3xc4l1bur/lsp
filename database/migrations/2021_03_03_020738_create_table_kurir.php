<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKurir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kurir', function (Blueprint $table) {
            $table->bigIncrements('id_kurir');
            $table->string('nama_kurir',250);
            $table->string('email_kurir',250);
            $table->string('no_kurir',250);
            $table->string('photo',250);
            $table->string('password_kurir',50);
            $table->string('jenis',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kurir');
    }
}

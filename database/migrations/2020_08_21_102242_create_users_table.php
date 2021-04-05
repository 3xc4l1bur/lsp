<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Users;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->string('phone');
            $table->string('level');
            $table->timestamps();
        });
        Users::create([
            "name" => "Tafiq Abdul M",
            "email" => "taufikabdul354@gmail.com",
            "password" => "Exile354",
            "address" => "Jl. Batu Sari 2",
            "phone" => "085781046614",
            "level" => "Admin"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

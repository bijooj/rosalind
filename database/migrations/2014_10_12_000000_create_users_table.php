<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //comando para criar no banco de dados as seguintes tabelas
    public function up()
    {
        //tabela de usuarios(ultilizada para login futuramente)
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // tabela de drop das tabelas citadas abaixo
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

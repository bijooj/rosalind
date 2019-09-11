<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cpf',11);
            $table->char('rg', 10);
            $table->string('address');
            $table->string('date_birth');
            $table->string('description');
            $table->integer('usersId');
            $table->foreign('usersId')->references('id')->on('users');
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
        //
        Schema::dropIfExists('client');
    }
}

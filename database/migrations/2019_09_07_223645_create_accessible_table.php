<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessibleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('accessible', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('note');
            $table->text('comment');
            $table->boolean('status');
            $table->integer('clientId');
            $table->integer('providerId');
            $table->foreign('clientId')->references('id')->on('client');
            $table->foreign('providerId')->references('id')->on('provider');
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
        Schema::dropIfExists('accessible');
    }
}

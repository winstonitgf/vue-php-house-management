<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->increments('key_no');
            $table->unsignedInteger('user_key');
            $table->string('object_name');
            $table->string('object_desp');
            $table->integer('year');
            $table->integer('object_size');
            $table->string('object_type');
            $table->string('in_user');
            $table->dateTime('in_date');
            $table->string('up_user');
            $table->dateTime('up_date'); 
            $table->foreign('user_key')->references('key_no')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objects');
    }
}

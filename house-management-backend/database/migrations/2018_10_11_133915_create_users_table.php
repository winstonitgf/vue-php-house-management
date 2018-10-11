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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('key_no');
            $table->string('user_id');
            $table->string('user_name');
            $table->string('sex');
            $table->integer('age');
            $table->string('phone');
            $table->string('cell_phone');
            $table->string('fax');
            $table->string('in_user');
            $table->dateTime('in_date');
            $table->string('up_user');
            $table->dateTime('up_date');    
        });
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('key_no');
            $table->string('value');
            $table->string('key');
            $table->string('desp');
            $table->string('flex_1');
            $table->string('flex_2');
            $table->string('flex_3');
            $table->string('flex_4');
            $table->string('flex_5');
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
        Schema::dropIfExists('configs');
    }
}

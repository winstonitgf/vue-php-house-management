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
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->string('flex1')->nullable();
            $table->string('flex2')->nullable();
            $table->string('flex3')->nullable();
            $table->string('flex4')->nullable();
            $table->string('flex5')->nullable();
            $table->string('flex6')->nullable();
            $table->string('flex7')->nullable();
            $table->string('flex8')->nullable();
            $table->string('flex9')->nullable();
            $table->string('flex10')->nullable();
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
        Schema::dropIfExists('configs');
    }
}

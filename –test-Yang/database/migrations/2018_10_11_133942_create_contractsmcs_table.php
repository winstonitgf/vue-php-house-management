<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsmcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractsmcs', function (Blueprint $table) {
            $table->increments('key_no');
            $table->unsignedInteger('user_key');
            $table->unsignedInteger('object_key_no');
            $table->string('contract_desc');
            $table->string('contract_id');
            $table->string('contract_type');
            $table->string('in_user');
            $table->dateTime('in_date');
            $table->string('up_user');
            $table->dateTime('up_date');    
            $table->foreign('user_key')->references('key_no')->on('users');
            $table->foreign('object_key_no')->references('key_no')->on('objects'); 
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contractsmcs');
    }
}

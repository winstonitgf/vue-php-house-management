<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serialnumbers');      //合約序號
            $table->string('address');             //地址
            $table->string('landholder', 20);      //房東或房屋管理公司
            $table->string('renter',20);           //承租人
            $table->integer('price');              //租金
            $table->date('rent_start');            //租屋開始日期
            $table->date('rent_end');              //租屋結束日期
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
        Schema::dropIfExists('contracts');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverstockPallet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overstock_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ean');
            $table->timestamps();
        });
        Schema::create('overstock_whitegoods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ean');
            $table->timestamps();
        });
        Schema::create('overstock_tele', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ean');
            $table->timestamps();
        });
        Schema::create('overstock_tv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ean');
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
        Schema::dropIfExists('overstock');
    }
}

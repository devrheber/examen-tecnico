<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBebidaRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebida_restaurantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurante_id');
            $table->unsignedBigInteger('bebida_id');
            $table->timestamps();

            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
            $table->foreign('bebida_id')->references('id')->on('bebidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bebida_restaurantes');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatoRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plato_restaurantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('plato_id');
            $table->unsignedBigInteger('restaurante_id');
            $table->timestamps();

            $table->foreign('plato_id')->references('id')->on('platos');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plato_restaurantes');
    }
}

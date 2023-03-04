<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatosNewsLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platos_news_letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('plato_id');
            $table->unsignedBigInteger('newsletter_id');
            $table->timestamps();

            $table->foreign('plato_id')->references('id')->on('platos');
            $table->foreign('newsletter_id')->references('id')->on('news_letters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platos_news_letters');
    }
}

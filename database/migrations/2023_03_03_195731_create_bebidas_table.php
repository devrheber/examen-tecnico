<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 20)->nullable();
            $table->decimal('precio', 10, 2)->nullable();
            $table->string('descripcion', 20)->nullable();
            $table->string('zona', 20)->nullable();
            $table->decimal('oferta', 10, 2)->nullable();
            $table->date('fecha')->nullable();
            $table->string('imagen', 20)->nullable();
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
        Schema::dropIfExists('bebidas');
    }
}

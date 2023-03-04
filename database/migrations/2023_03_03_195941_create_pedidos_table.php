<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('restaurante_id');
            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('usuario_id');
            $table->decimal('precio', 10, 2);
            $table->integer('enviado')->default(1);
            $table->date('fecha');
            $table->time('hora_list');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
            $table->foreign('factura_id')->references('id')->on('facturas');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            //declarando PK
            $table->increments('id_pedido');
            //declarando chave estrangeira
            $table->integer('id_encomenda')->unsigned();
            $table->integer('id_cliente')->unsigned();
            //declarando as tabelas
            $table->integer('numero_pedido');
            $table->string('status_pedido');
            $table->decimal('valor', 8, 2);
            $table->dateTime('hora_inicio', 0);
            $table->dateTime('hora_termino', 0);
            $table->string('tipo_entrega');
            $table->string('forma_pagamento');
            $table->timestamps();
            //referenciando chave estrangeira
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
            $table->foreign('id_encomenda')->references('id_encomenda')->on('encomenda');
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

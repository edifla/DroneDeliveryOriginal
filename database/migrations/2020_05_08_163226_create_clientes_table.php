<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_clientes');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('senha');
            $table->integer('contato');
            $table->string('email');
            $table->date('data');
            $table->string('endereco');
        });
    }
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

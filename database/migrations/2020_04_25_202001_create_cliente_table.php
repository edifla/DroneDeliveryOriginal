<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            //declarando PK
            $table->increments('id_cliente');
            //declarando as tabelas
            $table->string('nome_cliente');
            $table->string('sobrenome_cliente');
            $table->string('senha');
            $table->string('contato',20);
            $table->string('email')->unique();
            $table->date('data_nascimento');
            $table->string('endereco');
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}

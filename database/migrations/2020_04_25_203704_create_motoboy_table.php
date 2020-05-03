d<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotoboyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoboy', function (Blueprint $table) {
            //declarando PK
            $table->increments('id_motoboy');
            //declarando chave estrangeira
            $table->integer('id_restaurantes')->unsigned();
             //declarando as tabelas
            $table->string('nome_M');
            $table->integer('cpfM');
            $table->string('placa');
            
            //referenciando chave estrangeira
            $table->foreign('id_restaurantes')->references('id_restaurantes')->on('restaurantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motoboy');
    }
}

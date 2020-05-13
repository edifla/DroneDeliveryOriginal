<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->increments('id_restaurantes');
            
            $table->integer('id_prato')->unsigned();

            $table->string('Nome_restaurante');
            $table->string('Dono');
            $table->string('Cnpj');
            $table->string('email_restaurante');
            $table->integer('contato_dono');
            $table->longText('descricao');
            $table->string('endereco');

            $table->foreign('id_prato')->references('id_prato')->on('pratos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
}

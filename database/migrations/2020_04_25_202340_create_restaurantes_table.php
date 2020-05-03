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
             //declarando PK
            $table->increments('id_restaurantes');
            //declarando as tabelas
            $table->string('nome_restaurante');
            $table->string('cnpj');
            $table->string('email_Rest');
            $table->string('donoRest');
            $table->string('phoneRest');
            $table->longText('descricao');
            $table->string('endereco_restaurante');
            $table->string('categoria_restaurante');
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

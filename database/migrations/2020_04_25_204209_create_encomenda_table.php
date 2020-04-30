<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncomendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomenda', function (Blueprint $table) {
            //declarando PK
            $table->increments('id_encomenda');
           //declarando chave estrangeira
            $table->integer('id_restaurantes')->unsigned();
             //declarando as tabelas
            $table->string('nome_encomenda');
            $table->decimal('preco', 8, 2);
            $table->longText('descricao');
            $table->dateTime('tempo_de_entrega', 0);
            $table->timestamps();
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
        Schema::dropIfExists('encomenda');
    }
}

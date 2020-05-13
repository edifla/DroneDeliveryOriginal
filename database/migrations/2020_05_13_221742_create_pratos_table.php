<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratos', function (Blueprint $table) {
            $table->increments('id_prato');
            
            $table->integer('id_restaurantes')->unsigned();

            $table->string('Nome_prato');
            $table->longText('descricao_prato');
            $table->decimal('preco', 8, 2);

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
        Schema::dropIfExists('pratos');
    }
}

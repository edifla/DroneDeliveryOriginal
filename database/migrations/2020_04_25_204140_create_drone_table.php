<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drone', function (Blueprint $table) {
            //declarando PK
            $table->increments('id_drone');
            //declarando chave estrangeira    
            $table->integer('id_restaurantes')->unsigned();
            $table->integer('id_cliente')->unsigned();
            //declarando as tabelas
            $table->decimal('latitude', 8, 2);
            $table->decimal('longitude', 8, 2);
            $table->integer('bateria');
            $table->string('stats');
            $table->timestamps();
                //referenciando chave estrangeira
            $table->foreign('id_restaurantes')->references('id_restaurantes')->on('restaurantes');
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drone');
    }
}

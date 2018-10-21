<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservaciones extends Migration
{
   
    public function up()
    {
    Schema::create('reservaciones',function(Blueprint $table)
        {
        $table->increments('id_reserva');
        $table->date('fecha');
        $table->time('hora');
        $table->integer('mesa');
        $table->integer('no_personas');
        $table->integer('id_cliente')->unsigned();
        $table->foreign('id_cliente')->references ('id_cliente')->on ('clientes');
        $table->rememberToken();
        $table->timestamps();
        $table->softDeletes();
        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservaciones');
    
    }
}

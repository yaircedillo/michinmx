<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedidos extends Migration
{
    
    public function up()
    {
        Schema::create('pedidos',function(Blueprint $table){
            $table->increments('id_pedido');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references ('id_cliente')->on ('clientes');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

  
    public function down()
    {
        Schema::drop('pedidos');
    }
}

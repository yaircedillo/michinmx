<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tickets extends Migration
{
  
    public function up()
    {
        Schema::create('tickets',function(BluePrint $table)
        {
        $table->increments('id_ticket');

        $table->integer('id_venta')->unsigned();
        $table->foreign('id_venta')->references('id_venta')->on('ventas');
        $table->rememberToken();
        $table->timestamps();
        });
    }

   
    public function down()
    {
        SChema::drop('tickets');
    }
}

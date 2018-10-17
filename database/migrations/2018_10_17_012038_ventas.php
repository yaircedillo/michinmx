<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas',function(Blueprint $table)
        {
        $table->increments('id_venta');
        $table->date('fecha_venta');
        $table->float('iva');
        $table->float('precio_tot_venta');
        $table->integer('id_orden')->unsigned();
        $table->integer('id_promocion')->unsigned();
        $table->foreign('id_orden')->references('id_orden')->on('ordenes');
        $table->foreign('id_promocion')->references('id_promocion')->on('promociones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}

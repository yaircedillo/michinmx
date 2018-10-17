<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras',function(Blueprint $table)
        {
        $table->increments('id_compra');
        $table->float('cat_compra');
        $table->float('precio_unit');
        $table->float('precio_total');
        $table->date('fecha_compra');
        $table->float('iva');
        $table->integer('id_insumo')->unsigned();
        $table->foreign('id_insumo')->references('id_insumo')->on('insumos');
        });

    }
    public function down()
    {
        Schema::drop('compras');
    }
}

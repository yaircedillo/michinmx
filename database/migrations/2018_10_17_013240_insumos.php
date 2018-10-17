<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Insumos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos',function(BluePrint $table){
            $table->increments('id_insumo');
            $table->string('nombre',100);
            $table->string('decripcion',100);
            $table->date('fecha_entrega');
            $table->date('fecha_revision');
            $table->float('cantidad');
            $table->integer('id_unidad')->unsigned();
            $table->integer('id_personal')->unsigned();
            $table->foreign('id_unidad')->references('id_unidad')->on('unidad');
            $table->foreign('id_personal')->references('id_personal')->on('personales');
            $table->rememberToken();
            $table->timestamps();
            });
    }


    public function down()
    {
        Schema::drop('insumos');
    }
}

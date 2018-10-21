<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ordenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('ordenes',function(BluePrint $table){
            $table->increments('id_orden');
            $table->float('precio_unit');
            $table->float('precio_total');
            $table->float('orden_extra');
            $table->integer('id_carta')->unsigned();
            $table->integer('id_personal')->unsigned();
            $table->integer('id_cliente')->unsigned();
    
            $table->foreign('id_carta')->references('id_carta')->on('cartas');
            $table->foreign('id_personal')->references('id_personal')->on('personales');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
                        
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
        Schema::drop('ordenes');
    }
}

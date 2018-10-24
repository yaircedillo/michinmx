<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personales extends Migration
{
    
    public function up()
    {
        Schema::create('personales',function(Blueprint $table)
        {
            $table->increments('id_personal');
            $table->string('nombre',40);
            $table->string('ap_pat',40);
            $table->string('ap_mat',40);            
            $table->char('genero',2);
            $table->string('calle',50);
            $table->string('colonia',40);
            $table->integer('cp');
            $table->string('correo',40);
            $table->integer('telefono');
            $table->integer('id_municipios')->unsigned();
            $table->integer('id_puesto')->unsigned();
            $table->boolean('activo');
            $table->foreign('id_municipios')->references ('id_municipios')->on('municipio');
            $table->foreign('id_puesto')->references ('id_puesto')->on('puestos');
            $table ->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

   
    public function down()
    {
        Schema::drop('personales');
    }
}

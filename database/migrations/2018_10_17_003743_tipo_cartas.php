<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoCartas extends Migration
{
    
    public function up()
    {
        Schema::create('tipo_cartas',function(Blueprint $table)
        {
            $table->increments('id_tipo_c');
            $table->string('nombre',40);
            $table->rememberToken();
            $table->timestamps();   
    });
    }

   
    public function down()
    {
        Schema:: drop('tipo_cartas');
    }
}

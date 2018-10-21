<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Promociones extends Migration
{
    
    public function up()
    {
        Schema::create('promociones',function(Blueprint $table)
        {
        $table->increments('id_promocion');
        $table->string('descripcion',150);
        $table->date('fecha_inicio');
        $table->date('fecha_final');
        $table->time('horario');
        $table->rememberToken();
        $table->timestamps(); 
        $table->softDeletes();
        });
    }

    
    public function down()
    {
        Schema::drop('promociones');
    }
}

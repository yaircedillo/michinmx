<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Municipio extends Migration
{
    
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->increments('id_municipios');
            $table->string('municipio',40);
            $table->integer('id_estado')->unsigned();
            $table->rememberToken();
		    $table->timestamps();
            $table->foreign('id_estado')->references('id_estado')->on('estado');
		   		
			
        });
    }
    public function down()
    {
        Schema::drop('municipio');
    }
}

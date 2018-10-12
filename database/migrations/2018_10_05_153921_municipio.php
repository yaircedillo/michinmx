<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Municipio extends Migration
{
    
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->increments('id');
		    $table->string('municipio',40);
			$table->integer('id')->unsigned();
		    $table->foreign('id')->references('id')->on('estado');
					
			$table->rememberToken();
		    $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('municipio');
    }
}

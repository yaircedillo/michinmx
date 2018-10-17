<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estado extends Migration
{
    
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->increments('id_estado');
		    $table->string('estado',40);
	
			$table->rememberToken();
		    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estado');
    }
}

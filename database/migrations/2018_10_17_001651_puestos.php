<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Puestos extends Migration
{
    
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->increments('id_puesto');
            $table->string('puesto',50);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    

   
    public function down()
    {
        Schema::drop('puestos');
    }
}

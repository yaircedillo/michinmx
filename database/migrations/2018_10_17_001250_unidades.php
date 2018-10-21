<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Unidades extends Migration
{
   
    public function up()
    {      
    Schema::create ('unidad',function(BluePrint $table){
        $table->increments('id_unidad');
        $table->string('medida',40);
        $table ->rememberToken();
        $table ->timestamps();
        $table->softDeletes();
    });

    }
    

    
    public function down()
    {
        Schema::drop('unidad');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cartas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->increments('id_carta');
            $table->string('nombre',40);
            $table->string('descripcion',150);
            $table->float('precio');
                       
            $table->integer('id_tipo_c')->unsigned();
            $table->integer('id_personal')->unsigned();
            $table->foreign('id_tipo_c')->references('id_tipo_c')->on('tipo_cartas');
            $table->foreign('id_personal')->references('id_personal')->on('personales');
					
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
        Schema::drop('cartas');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('proveedor',function(Blueprint $table)
    {
        $table->increments('id_proveedores');
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
        $table->foreign('id_municipios')->references ('id_municipios')->on('municipio');
        $table ->rememberToken();
        $table->timestamps();
    });
}
    public function down()
    {
    Schema::drop('proveedor');
    }
}

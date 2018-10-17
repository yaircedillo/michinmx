<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    protected $table='insumos';
    protected $primaryKey='id_insumos';
    protected$filable=['id_insumos','id_unidad','id_personal','nombre','descripcion','fecha_entrega','fecha_revision','cantidad'];
    protected $hidden = ['remember_token'];
}

<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
    protected $table='compra';
    protected $primaryKey='id_compra';
    protected $fillable=['id_compra','id_insumo','cat_compra','precio_unit','precio_total','fecha_compra','iva'];
    protected $hidden='remember_token';
}

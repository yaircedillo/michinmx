<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    protected $table='venta';
    protected $primaryKey='id_venta';
    protected $fillable=['id_venta','id_orden','id_promocion','fecha_venta','iva','precio_tot_venta'];
    protected $hidden = ['remember_token'];
}

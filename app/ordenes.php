<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class ordenes extends Model
{
    protected $table='orden';
    protected $primaryKey='id_orden';
    protected $fillable=['id_orden','id_carta','id_cliente','id_personal','cantidad','precio_unit','precio_total','orden_extra'];
    protected $hidden = ['remember_token'];
}

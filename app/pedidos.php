<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $table='pedido';
    protected $primaryKey='id_pedido';
    protected $fillable= ['id_pedido,id_cliente','fecha','hora'];
    protected $hidden='remember_token';
}

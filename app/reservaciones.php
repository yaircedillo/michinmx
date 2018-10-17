<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class reservaciones extends Model
{
    protected $table='reservaciones';
    protected $primaryKey='id_reserva';
    protected $fillable=['id_reserva','id_cliente','fecha','hora','mesa','no_personas'];
    protected $hidden = ['remember_token'];
}

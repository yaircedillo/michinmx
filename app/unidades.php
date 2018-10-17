<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class unidades extends Model
{
    protected $table='unidad';
    protected $primaryKey='id_unidad';
    protected $fillable=['id_unidad','medida'];
    protected $hidden=['remember_token'];
}

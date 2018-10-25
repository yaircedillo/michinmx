<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class tipo_cartas extends Model
{
    protected $table='tipo_cartas';
    protected $primaryKey='id_tipo_c';
    protected $fillable=['id_tipo_c','nombre'];
    protected $hidden = ['remember_token'];
}

<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class cartas extends Model
{
    protected $table='cartas';
    protected $primaryKey='id_carta';
    protected $fillable=['id_carta','id_tipo_c','nombre','descripcion','id_personal','precio'];
    protected $hidden = ['remember_token'];
}

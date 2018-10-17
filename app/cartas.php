<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class cartas extends Model
{
    protected $table='carta';
    protected $primaryKey='id_carta';
    protected $fillable=['id_carta','id_tipo_carta','nombre','descripcion','id_personal','precio'];
    protected $hidden = ['remember_token'];
}

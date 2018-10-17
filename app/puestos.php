<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class puestos extends Model
{
    protected $table = 'puestos';
    protected $primaryKey = 'id_puesto'; 
    protected $fillable=['id_puesto','puesto'];
    protected $hidden='remember_token';
}

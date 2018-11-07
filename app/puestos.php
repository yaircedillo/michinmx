<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class puestos extends Model
{
    use SoftDeletes;
    protected $table = 'puestos';
    protected $primaryKey = 'id_puesto'; 
    protected $fillable=['id_puesto','puesto'];
    protected $hidden='remember_token';
    protected $date = ['deleted_at'];
}

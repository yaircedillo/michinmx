<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class unidades extends Model
{
    use SoftDeletes;
    protected $table='unidad';
    protected $primaryKey='id_unidad';
    protected $fillable=['id_unidad','medida'];
    protected $hidden=['remember_token'];
    protected $date = ['deleted_at'];
}

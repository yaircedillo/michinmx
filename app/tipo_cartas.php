<?php

namespace michinmx;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class tipo_cartas extends Model
{
    use SoftDeletes;
    protected $table='tipo_cartas';
    protected $primaryKey='id_tipo_c';
    protected $fillable=['id_tipo_c','nombre'];
    protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];
}

<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $table='proveedor';
    protected $primaryKey='id_proveedor';
    protected $fillable=['id_proveedor','nombre','ap_pat','ap_mat','genero','calle','colonia','cp','correo','telefono','id_municipio'];
    protected $hidden = ['remember_token'];
}

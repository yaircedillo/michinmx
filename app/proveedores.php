<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $table='proveedor';
    protected $primaryKey='id_proveedores';
    protected $fillable=['id_proveedores','nombre','ap_pat','ap_mat','genero','calle','colonia','cp','correo','telefono','id_municipios'];
    protected $hidden = ['remember_token'];
}

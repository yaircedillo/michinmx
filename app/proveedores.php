<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class proveedores extends Model
{
    use SoftDeletes;
    protected $table='proveedor';
    protected $primaryKey='id_proveedores';
    protected $fillable=['id_proveedores','nombre','ap_pat','ap_mat','genero','calle','colonia','cp','correo','telefono','id_municipios'];
    protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];
}

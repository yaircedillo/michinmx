<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
    use SoftDeletes;
    protected $table ='clientes';
    protected $primaryKey = 'id_cliente'; 
    protected $fillable=['id_cliente','nombre','ap_pat','ap_mat','genero',
    'telefono_c','calle','colonia','cp','correo','id_municipios'];
    protected $hidden='remember_token';
    protected $date = ['deleted_at'];
}

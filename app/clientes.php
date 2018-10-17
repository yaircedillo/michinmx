<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table ='clientes';
    protected $primaryKey = 'id_cliente'; 
    protected $fillable=['id_cliente','nombre','ap_pat','ap_mat','genero','telefono','calle','colonia','cp','correo','id_municipio'];
    protected $hidden='remember_token';
}

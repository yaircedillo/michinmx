<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class personales extends Model
{
    protected $table ='personales';
    protected $primaryKey = 'id_personal'; 
    protected $fillable=['id_personal','id_puesto','archivo','id_municipios','nombre','ap_pat','ap_mat','genero','calle','colonia','cp','correo','telefono'];
    protected $hidden='remember_token';
}

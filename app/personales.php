<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class personales extends Model
{
    use SoftDeletes;
    protected $table ='personales';
    protected $primaryKey = 'id_personal'; 
    protected $fillable=['id_personal','id_puesto','archivo','id_municipios','nombre','ap_pat','ap_mat','genero','calle','colonia','cp','correo','telefono'];
    protected $hidden='remember_token';
    protected $date = ['deleted_at'];

}

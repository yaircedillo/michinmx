<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class promociones extends Model
{
    protected $table = 'promociones';
    protected $primaryKey='id_promocion';
    protected $fillable=['id_promocion','descripcion','fecha_inicio','fecha_final','horario'];
    protected $hidden='remember_token';
}

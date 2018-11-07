<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class promociones extends Model
{
    use SoftDeletes;
    protected $table = 'promociones';
    protected $primaryKey='id_promocion';
    protected $fillable=['id_promocion','descripcion','fecha_inicio','fecha_final','horario'];
    protected $hidden='remember_token';
    protected $date = ['deleted_at'];
}

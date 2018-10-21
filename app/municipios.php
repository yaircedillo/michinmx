<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'id_municipios';
    protected $fillable=['id_municipios','municipio','id_estado'];
}

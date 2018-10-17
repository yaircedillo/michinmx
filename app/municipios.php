<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'id_municipio';
    protected $fillable=['id_municipio','municipio','id_estado'];
}

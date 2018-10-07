<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
    protected $table = 'estado';
    protected $fillable=['id_estado','estado'];
    protected $hidden = ['remember_token'];
}

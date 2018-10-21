<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


  class estados extends Model
{
    
    protected $table = 'estado';

    protected $primaryKey = 'id_estado'; 
    protected $fillable=['id_estado','estado'];
    protected $hidden = ['remember_token'];
    
}

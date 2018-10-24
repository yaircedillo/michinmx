<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable=['id','name','email','password','created_at','updated_at','deleted_at','archivo']; 
    protected $hidden=['remember_token'];
}

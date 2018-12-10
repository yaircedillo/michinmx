<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    use SoftDeletes;
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable=['id','name','email','password','tipo','user','created_at','updated_at','deleted_at','archivo']; 
    protected $hidden=['remember_token'];
    protected $date = ['deleted_at'];
}

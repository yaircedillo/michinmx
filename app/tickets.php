<?php

namespace michinmx;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    protected $table='ticket';
    protected $primaryKey='id_ticket';
    protected $fillable=['id_ticket','id_venta'];   
    protected $hidden = ['remember_token'];
}

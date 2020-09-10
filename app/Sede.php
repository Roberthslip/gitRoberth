<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
     protected $table = 'sedes'; 
    protected $fillable = ['sede','direccion'];

    public function equipo(){
        return $this->hasMany(Equipo::class,'id_sede');
    }
}

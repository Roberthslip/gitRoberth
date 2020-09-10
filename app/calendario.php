<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calendario extends Model
{
    
    public $timestamps=false;

    protected $table='calendarios';

    protected $fillable = ['Equipo1','Equipo2', 'Fecha'];
}

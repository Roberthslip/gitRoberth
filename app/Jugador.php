<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';
    protected $fillable = ['alias','posicion','numero','goles','asistencias'];

    public function equipo(){
        return $this->belongsTo(Equipo::class,'id_equipo');
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }

   
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nombre','apellido','edad','id_users','permiso'];
    protected $hidden = ['pass', 'remember_token'];

    public function jugador(){
        return $this->hasMany(Jugador::class,'id_cliente');
    }

    public function users(){
        return $this->belongsTo(User::class,'id');
    }
}

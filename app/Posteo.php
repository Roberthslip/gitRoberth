<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    protected $table = 'posteos';
    protected $fillable = ['titulo','descripcion','imagen'];

    public function cliente(){
        return $this->belongsTo(Cliente::class,'id');
    }
}

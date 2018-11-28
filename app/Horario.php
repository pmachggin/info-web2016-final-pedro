<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model{
	
    protected $fillable = ['dia', 'saida'];

    public function temporada() {
        return $this->belongsTo(Temporada::class);
    }

    public function historicos() {
        return $this->hasMany(Historico::class);
    }

     public function caronas() {
        return $this->hasMany(Carona::class);
    }
    public function horarios() {
        return $this->hasMany(Horarios::class);
    }
}

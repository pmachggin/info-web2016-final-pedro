<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model{
	
    protected $fillable = ['inicio', 'fim', 'descricao'];
    
    public function horarios(){
        return $this->hasMany(Horario::class);
    }
}

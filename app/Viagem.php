<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model{

    protected $fillable = ['user_id', 'horario_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function horario(){
        return $this->belongsTo(Horario::class);
    }

}

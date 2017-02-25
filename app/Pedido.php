<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = [
      'paciente_id', 'medico_id'
    ];

    public function exames() {
      return $this->belongsToMany(Exame::class);
    }
}

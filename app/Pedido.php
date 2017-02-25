<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    public function exames() {
      return $this->belongsToMany(Exame::class);
    }
}

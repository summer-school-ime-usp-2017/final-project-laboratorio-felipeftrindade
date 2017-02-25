<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    //
    public function pedidos() {
      return $this->belongsToMany(Pedido::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Plato extends Model
{
    public function pedido(): HasOne {
        return $this->hasOne(Pedido::class);
    }
}

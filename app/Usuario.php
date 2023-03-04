<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    protected $appends = ['ultimo_restaurante'];

    public function pedidos(): HasMany {
        return $this->hasMany(Pedido::class);
    }

    public function getUltimoRestauranteAttribute() {
        return $this->pedidos->latest('restaurante_id')->first();
    }
}

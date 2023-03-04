<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bebida extends Model
{
    protected $appends = ['nombre', 'precio', 'descripcion', 'zona', 'oferta', 'fecha', 'imagen'];
    public function pedido(): HasOne {
        return $this->hasOne(Pedido::class);
    }
}

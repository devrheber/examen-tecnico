<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedido extends Model
{
    public function usuario(): BelongsTo {
        return $this->belongsTo(Usuario::class);
    }

    public function cliente(): BelongsTo {
        return $this->belongsTo(Cliente::class);
    }

    public function restaurante(): BelongsTo {
        return $this->belongsTo(Restaurante::class);
    }

    public function factura(): BelongsTo {
        return $this->belongsTo(Factura::class);
    }

    public function platos(): HasMany {
        return $this->hasMany(Plato::class);
    }

    public function bebidas(): HasMany {
        return $this->hasMany(Bebida::class);
    }
}

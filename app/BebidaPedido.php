<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BebidaPedido extends Model
{
    public function pedido(): BelongsTo {
        return $this->belongsTo(Pedido::class);
    }

    public function bebida(): BelongsTo {
        return $this->belongsTo(Bebida::class);
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cliente' => $this->cliente,
            'restaurante' => $this->restaurante,
            'factura' => $this->factura,
            'usuario' => $this->usuario,
            'precio' => $this->precio,
            'enviado' => $this->enviado,
            'fecha' => $this->fecha,
            'hora_list' => $this->hora_list
        ];
    }
}

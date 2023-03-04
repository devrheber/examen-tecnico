<?php

namespace App\Http\Controllers;

use App\Http\Resources\PedidoResource;
use App\Pedido;
use App\Usuario;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function pregunta1() {
        $pedidos = PedidoResource::collection(Pedido::where('usuario_id', 4)->get());
        return view('preguntas.pregunta1', compact('pedidos'));
    }

    public function pregunta2() {
        return view('preguntas.pregunta2');
    }

    public function pregunta3() {
        return view('crud.tareas.index');
    }

    public function pregunta4() {
        return view('preguntas.pregunta4');
    }
}

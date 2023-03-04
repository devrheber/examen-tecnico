<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TareasController extends Controller
{
    public function index() {
        return view('crud.tareas.index');
    }

    public function dtUsuarios() {
        return datatables()->of(Usuario::all())->toJson();
    }

    public function editarUsuario(Request $request) {
        $usuario = Usuario::find($request->usuario_id);
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->direccion = $request->direccion;
        $usuario->activo = $request->activo;
        $usuario->save();

        return jsend_success($usuario);
    }

    public function grabarUsuario(UsuarioRequest $request) {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->clave = Hash::make($request->clave);
        $usuario->direccion = $request->direccion;
        $usuario->activo = $request->activo;
        $usuario->save();

        return jsend_success($usuario);
    }
}

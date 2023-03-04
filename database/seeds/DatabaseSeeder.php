<?php

use App\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario();
        $usuario->nombre = 'USUARIO PRUEBAS';
        $usuario->apellidos = 'APELLIDOS APELLIDOS';
        $usuario->email = 'heber@heber.com';
        $usuario->clave = Hash::make('12345678');
        $usuario->direccion = 'dirección de prueba';
        $usuario->activo = 1;
        $usuario->save();

        $restaurante = new \App\Restaurante();
        $restaurante->email = 'email@email.com';
        $restaurante->nif = '12345678';
        $restaurante->descripcion = 'descripcion';
        $restaurante->ciudad = 'Arequipa';
        $restaurante->telefono = 12345678;
        $restaurante->save();

        $cliente = new \App\Cliente();
        $cliente->email = 'email@email.com';
        $cliente->movil = 12345678;
        $cliente->sms_activo = 1;
        $cliente->fecha_nacimiento = '1993-06-19';
        $cliente->ciudad = 'Arequipa';
        $cliente->save();

        \App\Bebida::create([
            'nombre' => 'Bebida 1',
            'precio' => 10.0,
            'descripcion' => 'Mi bebida 1',
            'zona' => 'AA',
            'oferta' => 00,
            'fecha' => '2023-01-01',
            'imagen' => 'url_imagen.jpg'
        ]);

        \App\Bebida::create([
            'nombre' => 'Bebida 2',
            'precio' => 20,
            'descripcion' => 'Mi bebida 2',
            'zona' => 'AB',
            'oferta' => 00,
            'fecha' => '2023-01-01',
            'imagen' => 'url_imagen_2.jpg'
        ]);

        \App\Bebida::create([
            'nombre' => 'Bebida 3',
            'precio' => 16.2,
            'descripcion' => 'Mi bebida 3',
            'zona' => 'BB',
            'oferta' => 00,
            'fecha' => '2023-01-01',
            'imagen' => 'url_imagen_3.jpg'
        ]);

        $factura1 = new \App\Factura();
        $factura1->tipo_iva = 'ABC';
        $factura1->cliente_id = $cliente->id;
        $factura1->restaurante_id = $restaurante->id;
        $factura1->save();

        $factura2 = new \App\Factura();
        $factura2->tipo_iva = 'AAA';
        $factura2->cliente_id = $cliente->id;
        $factura2->restaurante_id = $restaurante->id;
        $factura2->save();

        $pedido = new \App\Pedido();
        $pedido->cliente_id = $cliente->id;
        $pedido->restaurante_id = $restaurante->id;
        $pedido->factura_id = $factura1->id;
        $pedido->usuario_id = $usuario->id;
        $pedido->precio = 200;
        $pedido->enviado = 200;
        $pedido->fecha = '2023-01-01';
        $pedido->hora_list = '02:02:00';
        $pedido->save();

        $pedido2 = new \App\Pedido();
        $pedido2->cliente_id = $cliente->id;
        $pedido2->restaurante_id = $restaurante->id;
        $pedido2->factura_id = $factura2->id;
        $pedido2->usuario_id = $usuario->id;
        $pedido2->precio = 200;
        $pedido2->enviado = 200;
        $pedido2->fecha = '2022-01-01';
        $pedido2->hora_list = '02:00:00';
        $pedido2->save();
        // $this->call(UsersTableSeeder::class);
    }
}

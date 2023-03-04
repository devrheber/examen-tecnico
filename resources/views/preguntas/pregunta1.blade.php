<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pregunta 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<a href="/">REGRESAR</a>

<table class="table">
    <thead>
    <tr>
        <th>NOMBRE USUARIO</th>
        <th>EMAIL CLIENTE</th>
        <th>FACTURA</th>
        <th>PRECIO</th>
        <th>ENVIADO</th>
    </tr>
    </thead>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{{$pedido->usuario->nombre}}</td>
            <td>{{$pedido->cliente->email}}</td>
            <td>{{$pedido->factura->tipo_iva}}</td>
            <td>{{$pedido->precio}}</td>
            <td>{{$pedido->enviado}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>

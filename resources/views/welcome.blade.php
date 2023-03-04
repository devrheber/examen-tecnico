<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen Técnico</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br/>
                <div class="card">
                    <div class="card-body">
                        Este es un examen técnico
                    </div>
                    <div class="card-footer">
                        <ol>
                            <li><a href="{{route('pregunta1')}}">Elabore un query que me dé como resultado los datos de: usuario, sus pedidos y el
                                    restaurante donde se hizo el pedido del último mes.</a>
                            </li>
                            <li><a href="{{route('pregunta2')}}">¿Cuál es la diferencia entre un Ajax, JSON y fetch? De un ejemplo de cada uno.</a></li>
                            <li><a href="{{route('pregunta3')}}">Elabore un CRUD en Laravel 5.8 y MySQL como BD, en el que registre tareas a
                                    elaborar, deberá guardar un estado de realizado o no realizado en predeterminado. Se
                                    deberá compartir el enlace del proyecto a través de github con las debidas
                                    instrucciones para ser ejecutada de manera local, el proyecto debe contener un Query
                                    para la creación de la bd o en su defecto un archivo sql para su importación. (Utilizar la
                                    versión PHP 7.2)</a></li>
                            <li><a href="{{route('pregunta4')}}">¿Qué patrones de diseño de software conoces? ¿Cómo y en qué proyecto aplicaste el
                                    conocimiento de patrones de diseño?</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

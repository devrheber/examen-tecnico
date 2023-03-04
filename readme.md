## Hora de inicio: 02: 50 pm - 4: 50
## Retomé la actividad a las 10: 50pm - 11:55

## Instalación
Instalar dependencias

```
composer install
```

## Copiar variable de entorno
Ejecutar comando en la raíz del proyecto en la terminal

```
cp .env.example .env
```

## crear nombre de base de datos
El nombre de la base de datos será "examen_tecnico"

## Estructura de la base de datos
Ejecutar migraciones y seeders

```
php artisan migrate --seed
```

## Desplegar servidor
Desplegar el servidor para que no trabaje en la carpeta public

```
php artisan serve
```

### Librerías usadas
* Laravel Datatables: Para gestionar las peticiones en formato aceptado por datatables.net
* Laravel Jsend: Para responder a las peticiones en una estructura de apis
* Jquery
* Datatables.net (JS)
* Bootstra: Para las vistas

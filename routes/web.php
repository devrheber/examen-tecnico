<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('pregunta1', [\App\Http\Controllers\ExamenController::class, 'pregunta1'])->name('pregunta1');
Route::get('pregunta2', [\App\Http\Controllers\ExamenController::class, 'pregunta2'])->name('pregunta2');
Route::get('pregunta3', [\App\Http\Controllers\ExamenController::class, 'pregunta3'])->name('pregunta3');
Route::get('pregunta4', [\App\Http\Controllers\ExamenController::class, 'pregunta4'])->name('pregunta4');
Route::get('tareas/index', [\App\Http\Controllers\TareasController::class, 'index'])->name('crudTareas');
Route::get('tareas/dt', [\App\Http\Controllers\TareasController::class, 'dtUsuarios'])->name('dtUsuarios');
Route::post('tareas/store', [\App\Http\Controllers\TareasController::class, 'grabarUsuario'])->name('grabarUsuario');
Route::post('tareas/update', [\App\Http\Controllers\TareasController::class, 'editarUsuario'])->name('editarUsuario');

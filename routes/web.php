<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud\Jugador;
use App\Http\Controllers\crud\EquipoController;
use App\Http\Controllers\crud\JugadorController;

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

//AHORA USAREMOS ESTA

Route::get('/', function () {
   return view('welcome');
  //return "hola mundo";
});

//VER EQUIPOS
Route::get('/ver/equipos',[EquipoController::class,"verEquipos"])->name('ver.equipos');
//CREAR EQUIPOS
Route::get('/crear/equipo',[EquipoController::class,"index"]);
Route::post('/create',[EquipoController::class,"create"])->name('crear.equipo');

//ACTUALIZAR EQUIPO
Route::get('/editarurle/{id}', [EquipoController::class, 'editarurl'])->where('id','[0-9]+');
Route::post('/actualizare/{id}', [EquipoController::class, 'actualizar'])->where('id','[0-9]+');
Route::get('/eliminare/{id}', [EquipoController::class, 'eliminar'])->where('id','[0-9]+');

/////////////////////////////////////////////////


//VER JUGADORES
Route::get('/ver/jugadores',[JugadorController::class,"index"])->name('ver.jugadores');
//CREAR JUGADORES   
Route::get('/crear/jugador',[JugadorController::class,"crear"]);
Route::post('/crearjugador',[JugadorController::class,"create"])->name('crear.jugador');

Route::get('/eliminar/{id}', [JugadorController::class, 'eliminar'])->where('id','[0-9]+');

Route::get('/editarurlj/{id}', [JugadorController::class, 'editarurlj'])->where('id','[0-9]+');
Route::post('/actualizar/{id}', [JugadorController::class, 'actualizar'])->where('id','[0-9]+');


///
//esta bien
Route::get('/crear/jugadorequipo/{id}',[JugadorController::class,"jugadoresEquipos"]);

Route::post('/crear/crearequipojugador/{id}',[JugadorController::class,"crearequipojugador"]);

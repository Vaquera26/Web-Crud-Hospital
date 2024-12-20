<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vista1Controller;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\PacientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () 
{
    return view("menu");
} );

Route::get('/doctores', function () 
{
    return view("doctores");
} );

Route::get('/especialidades', function () 
{
    return view("especialidades");
} );

Route::get('/login/{user}/{password}', function ( $usuario, $password ) 
{
    return view("login", [ 'usuario' => $usuario, 'password' => $password ] );
} );

Route::get('/informacion/{numControl}/{nombre}/{carrera}', function ( $numControl, $nombre, $carrera ) 
{
    return view("informacion", [ 'numControl' => $numControl, 'nombre' => $nombre, 'carrera' => $carrera ] );
} );

Route::get( '/medicinas', [ Vista1Controller::class, 'index' ] ) -> name( 'medicinas.index' );
Route::get( '/medicinas/create', [ Vista1Controller::class, 'create' ] ) -> name( 'medicinas.create' );
Route::post( '/medicinas/store', [ Vista1Controller::class, 'store' ] ) -> name( 'medicinas.store' );
Route::delete( '/medicinas/destroy/{id}', [ Vista1Controller::class, 'destroy' ] ) -> name( 'medicinas.destroy' );
Route::get( '/medicinas/edit/{id}', [ Vista1Controller::class, 'edit' ] ) -> name( 'medicinas.edit' );
Route::get( '/medicinas/{id}', [ Vista1Controller::class, 'show' ] ) -> name( 'medicinas.show' );
Route::put( '/medicinas/update/{id}', [ Vista1Controller::class, 'update' ] ) -> name( 'medicinas.update' );

Route::get( '/doctores', [ DoctoresController::class, 'index' ] ) -> name( 'doctores.index' );
Route::get( '/doctores/create', [ DoctoresController::class, 'create' ] ) -> name( 'doctores.create' );
Route::post( '/doctores/store', [ DoctoresController::class, 'store' ] ) -> name( 'doctores.store' );
Route::delete( '/doctores/destroy/{id}', [ DoctoresController::class, 'destroy' ] ) -> name( 'doctores.destroy' );
Route::get( '/doctores/edit/{id}', [ DoctoresController::class, 'edit' ] ) -> name( 'doctores.edit' );
Route::get( '/doctores/{id}', [ DoctoresController::class, 'show' ] ) -> name( 'doctores.show' );
Route::put( '/doctores/update/{id}', [ DoctoresController::class, 'update' ] ) -> name( 'doctores.update' );

Route::get( '/especialidades', [ EspecialidadesController::class, 'index' ] ) -> name( 'especialidades.index' );
Route::get( '/especialidades/create', [ EspecialidadesController::class, 'create' ] ) -> name( 'especialidades.create' );
Route::post( '/especialidades/store', [ EspecialidadesController::class, 'store' ] ) -> name( 'especialidades.store' );
Route::delete( '/especialidades/destroy/{id}', [ EspecialidadesController::class, 'destroy' ] ) -> name( 'especialidades.destroy' );
Route::get( '/especialidades/edit/{id}', [ EspecialidadesController::class, 'edit' ] ) -> name( 'especialidades.edit' );
Route::get( '/especialidades/{id}', [ EspecialidadesController::class, 'show' ] ) -> name( 'especialidades.show' );
Route::put( '/especialidades/update/{id}', [ EspecialidadesController::class, 'update' ] ) -> name( 'especialidades.update' );

Route::get( '/pacientes', [ PacientesController::class, 'index' ] ) -> name( 'pacientes.index' );
Route::get( '/pacientes/create', [ PacientesController::class, 'create' ] ) -> name( 'pacientes.create' );
Route::post( '/pacientes/store', [ PacientesController::class, 'store' ] ) -> name( 'pacientes.store' );
Route::delete( '/pacientes/destroy/{id}', [ PacientesController::class, 'destroy' ] ) -> name( 'pacientes.destroy' );
Route::get( '/pacientes/edit/{id}', [ PacientesController::class, 'edit' ] ) -> name( 'pacientes.edit' );
Route::get( '/pacientes/{id}', [ PacientesController::class, 'show' ] ) -> name( 'pacientes.show' );
Route::put( '/pacientes/update/{id}', [ PacientesController::class, 'update' ] ) -> name( 'pacientes.update' );
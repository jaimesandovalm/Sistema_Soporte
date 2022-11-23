<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoRegistroController;
use App\Http\Controllers\ConceptoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\SubGrupoController;
use App\Http\Controllers\SetPruebaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\DocumentoController;
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
});


Route::resource('TipoRegistro',TipoRegistroController::class);
Route::resource('Concepto',ConceptoController::class);
Route::resource('Grupo',GrupoController::class);
Route::resource('SubGrupo',SubGrupoController::class);
Route::resource('SetPrueba',SetPruebaController::class);
Route::resource('Proveedor',ProveedorController::class);
Route::resource('Producto',ProductoController::class);
Route::resource('Movimiento',MovimientoController::class);
Route::resource('Documento',DocumentoController::class);
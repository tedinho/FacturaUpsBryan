<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('cliente', 'ClienteController');
Route::resource('factura', 'FacturaController');
Route::resource('facturaDetalle', 'FacturaDetalleController');
Route::resource('persona', 'PersonaController');
Route::resource('producto', 'ProductoController');
Route::resource('usuario', 'UsuarioController');
Route::get('usuarioClave/validar/{nombre}/{pass}', 'UsuarioClaveController@validar')->name('usuarioControler.validar');
Route::resource('usuarioClave', 'UsuarioClaveController');

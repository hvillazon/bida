<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoriasController;
use App\Http\Controllers\api\ProductosController;
use App\Http\Controllers\api\UsuariosController;
use App\Http\Controllers\api\InformacionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/categorias','App\Http\Controllers\CategoriaController@index', function(){
//     return response()->json($categorias);
// });

//CATEGORIAS
Route::get('/categorias','App\Http\Controllers\CategoriasController@index');
Route::post('/categorias','App\Http\Controllers\CategoriasController@store');
Route::get('/categorias/{categoria}','App\Http\Controllers\CategoriasController@show');
Route::put('/categorias/{categoria}','App\Http\Controllers\CategoriasController@update');
Route::delete('/categorias/{categoria}','App\Http\Controllers\CategoriasController@destroy');


//PRODUCTOS
Route::get('/productos','App\Http\Controllers\ProductosController@index');
Route::post('productos','App\Http\Controllers\ProductosController@store');
Route::get('/productos/{producto}','App\Http\Controllers\ProductosController@show');
Route::put('/productos/{producto}','App\Http\Controllers\ProductosController@update');
Route::delete('productos/{producto}','App\Http\Controllers\ProductosController@destroy');




// Route::resource('categorias',CategoriaController::class,);
// Route::resource('usuarios',UsuarioController::class);
// Route::resource('informacion',InformacionController::class);
// Route::resource('productos',ProductoController::class);
// Route::resource('photos', PhotoController::class);
//cambiar rutas


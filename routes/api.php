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

Route::get('categorias',[CategoriasController::class,'index']);
Route::get('usuarios',[UsuariosController::class,'index']);
Route::get('informacion',[InformacionController::class,'index']);
Route::get('productos',[ProductosController::class,'index']);
Route::resource('photos', PhotoController::class);
//cambiar rutas

Route::group(['prefix' => 'api/v1/user'], function(){
    Route::get('/', [\App\Http\Controllers\Api\V1\UserController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\Api\V1\UserController::class, 'store']);
    Route::get('/delete/{id}', [\App\Http\Controllers\Api\V1\UserController::class, 'destroy']);
    Route::post('/update/{id}', [\App\Http\Controllers\Api\V1\UserController::class, 'update']);
});
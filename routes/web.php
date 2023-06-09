<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidtionController;

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

Route::get('/', function () {
    echo "API";
});

Route::get('/menu', function () {
    return view('menu');
});



Route::get('/categorias','App\Http\Controllers\CategoriasController@index', function(){
    return $categorias;
});

Route::get('/form', [FormValidtionController::class, 'createUserForm']);
Route::post('/form', [FormValidtionController::class, 'UserForm'])->name('validate.form');


<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcio/Cadastro', [CadastroController::class, 'cadastro']);
#Mesma rota do formulario do cadastro permita guardar as informações no banco
Route::post('/funcio', [CadastroController::class, 'store']);


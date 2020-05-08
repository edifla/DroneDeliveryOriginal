<?php

use Illuminate\Support\Facades\Route;
use App\cliente;

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





//Teste Login número 2
Route::get('/','clientesController@ExibirFormularioLogin');
Route::post('/validacao','clientesController@FazerLogin');

//teste
route::get('inserir_cliente','clientesController@InserirCliente');
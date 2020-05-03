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

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('homepage');
});

Route::get('/sobre', function () {
    return view('sobre_nos');
});

Route::get('/restaurantes', function () {
    return view('restaurantes');
});

Route::get('/duvidas', function () {
    return view('duvidas');
});

Route::get('/registro', function (){
	return view ('registro');
});
Route::get('/loja', function (){
	return view ('loja');
});
Route::get('/teste',function(){
	//rota pra eliminar todos os dados da tabela cliente quando al´guém entrar nela
	DB::table('cliente')->delete();
	return "Ok";
});

//TESTE CONTROLER LOGIN

 
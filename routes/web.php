<?php

use Illuminate\Support\Facades\Route;
use App\cliente;


if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}



route::get('/homepage',function(){
	return view('/homepage');
});

route::get('/recsenha',function(){
	return view('recuperar_email');
});

//Para entrar no Login
Route::get("/","clientesController@Index");
//Pra entrar no registro
route::resource('/registro','clientesController');
//Validação do Login
Route::post('/validacao','clientesController@FazerLogin');
Route::get('/recuperar','clientesController@FormRecuperarSenha');



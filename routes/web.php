<?php

use Illuminate\Support\Facades\Route;
use App\cliente;

//Pra parar de dar um erro chatinho que tava dando no banco
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}



route::get('/homepage',function(){
	return view('/homepage');
});



//Para entrar no Login
Route::get("/","clientesController@Index");
//Pra entrar no registro
route::resource('/registro','clientesController');
//Validação do Login
Route::post('/validacao','clientesController@FazerLogin');
//Para apresentar o Formulário de recuperação de senha
Route::get('/recuperar','clientesController@FormRecuperarSenha');



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






//Default
Route::get("/","clientesController@Index");


//------------------------------------------------



//Registro
route::get('/frmregistro','clientesController@frmRegistro');
route::post('/registro','clientesController@NovoRegistro');

//------------------------------------------------


//Login
Route::get('/FrmLogin','clientesController@frmLogin');
Route::post('/executarLogin','clientesController@FazerLogin');


//------------------------------------------------



//Recuperação de Senha
Route::get('/recuperar','clientesController@FormRecuperarSenha');
route::post('/executar_rec_senha','clientesController@FazerRecuperacaoSenha');

//------------------------------------------------


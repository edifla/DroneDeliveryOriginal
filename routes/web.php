<?php

use Illuminate\Support\Facades\Route;
use App\cliente;

//Pra parar de dar um erro chatinho que tava dando no banco
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

route::get('/restaurante',function(){
	return view('/loja');
});


//CLIENTES CONTROLLLER--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------






//------------------------------------------------



//Registro
route::get('/frmregistro','clientesController@frmRegistro');
route::post('/registro','clientesController@NovoRegistro');

//------------------------------------------------


//Login
Route::get('/','clientesController@frmLogin');
Route::post('/executarLogin','clientesController@FazerLogin');


//------------------------------------------------



//Recuperação de Senha
Route::get('/recuperar','clientesController@FormRecuperarSenha');
route::post('/executar_rec_senha','clientesController@FazerRecuperacaoSenha');

//------------------------------------------------


//RESTAURANTES CONTROLLER-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



//Registro do resturante

Route::get('/teste','RestaurantesController@executar_registro_restaurante');
route::post('/executar_registro_restaurante','RestaurantesController@NovoRegistroRestaurantes');

//HOMEPAGE CONTROLLER---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Entrando na homepage com sua sessão
route::get('/homepage_index','homepageController@exibirhomepage');


//Entrando  na lista de restaurantes
route::get('/lista', 'restaurantesController@mostrarRestaurantes');
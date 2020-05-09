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


Route::get("/","clientesController@Index");
route::resource('/registro','clientesController');
Route::post('/validacao','clientesController@FazerLogin');




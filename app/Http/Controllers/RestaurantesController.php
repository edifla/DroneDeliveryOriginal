<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\restaurantes;
class RestaurantesController extends Controller
{
   public function executar_registro_restaurante()
   {
   //Retorna o restaurante
   	return view('/registro_restaurante');
   
   } 

   public function NovoRegistroRestaurantes(Request $request)
   {
   		//Inseri dados nos restaurantes
   		$novo = new restaurantes;
        $novo->nomeres = $request->text_nome_restaurante;
        $novo->dono = $request->text_dono;
        $novo->cnpj = $request->text_cnjp;
        $novo->emailres = $request->text_email_restaurante;
        $novo->contatodono = $request->text_contato_dono;
        $novo->descricao = $request->text_descricao;
        $novo->endereco = $request->text_endereco;
        $novo->save();
        return redirect('/homepage');

   }

   public function mostrarRestaurantes(){
      $dados = restaurantes::all();
      return view('listaRestaurantes', compact('dados'));
   }
}

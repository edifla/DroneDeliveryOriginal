<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\restaurantes;
class RestaurantesController extends Controller
{
   public function executar_registro_restaurante()
   {
   
   	return view('/registro_restaurante');
   
   } 
   public function NovoRegistroRestaurantes()
   {

   		$novor = new restaurantes;
        $novor->Nome_restaurante = $request->text_nome_restaurante;
        $novor->Dono = $request->text_dono;
        $novor->Cnpj = $request->text_cnjp;
        $novor->email_restaurante = $request->text_email_restaurante;
        $novor->contato_dono = $request->text_contato_dono;
        $novor->descricao = $request->text_descricao;
        $novor->endereco = $request->text_endereco;
        $novor->save();
        return redirect('/homepage');

   }
}

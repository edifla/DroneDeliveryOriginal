<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\clientes;
class clientesController extends Controller
{
    public function ExibirFormularioLogin()
    {

    	//retorna o form
    	return view('/login');
    }

    public function FazerLogin(Request $request)
    {
    	//Encriptando a senha
    	//$request->text_senha;
    	$senha =Hash::make($request->text_senha);
    	return $request->text_senha .  '-' . $senha;

    	/*Verificar os Input e depois da verificação,consultar o BD.
    	$this->validate($request,[
    		'text_email'=>'required',
    		'text_senha'=>'required'

    	]);

    	return "FOCO VOCE CONSEGUE";
    	*/
    }
    public function InserirCliente()
    {
   
    	$novo = new clientes;
    	$novo->nome = 'Lucas';
    	$novo->sobrenome = 'Lucas';
    	$novo->senha =Hash::make('coxinha123');
    	$novo->contato = '8189212';
    	$novo->email = 'Lucas666@gmail.com';
    	$novo->data = '2000-07-20';
    	$novo->endereco = 'Rua do tamandua';
   		$novo->save();
   		return 'Usuário salvo';
    }

}

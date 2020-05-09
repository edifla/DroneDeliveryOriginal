<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\clientes;

class clientesController extends Controller
{
   //Função pra retornar o formulário de recuperação de senha

   public function FormRecuperarSenha()
    {
        return view('/recuperar_email');
    } 
    
    //Função pra apresentar a pagina de Login como pagina inicial do site
    public function index()
    {
       return view ('/login');
    }

  
    public function create()
    {
        //APRESENTAÇÃO DO FORMULARIO DE REGISTRO PARA PODER SER UTILIZADO PELAS OUTRAS FUNÇÕES.
        return view('registro');
    }

    public function FazerLogin(Request $request)
    {
        //AUTENTICAÇÃO DO LOGIN.
       $dados = clientes::where('email', $request->text_email)->first();
       $resultado = "";


       if(count($dados)==0){
            $resultado = "Esta email de usuário não existe.";
            //return redirect ('/');
       }
       else{//Foi encontrado um usuário com este email.

            
            if(Hash::check($request->text_senha, $dados->senha)){//Verifica se a senha bate com o email no BD
                return redirect ('/homepage');//Se bateu,entra
            }else{//se nao bateu
                $resultado = "Senha invalida";
                //return redirect ('/');
            }
       }

    }
    public function store(Request $request)
    {

        //INSERÇÃO DE CLIENTES NOVOS ATRÁVES DO FORMULARIO DE REGISTRO.
        $novo = new clientes;
        $novo->nome = $request->text_nome;
        $novo->sobrenome = $request->text_sobrenome;
        $novo->senha =Hash::make($request->text_senha);
        $novo->contato = $request->text_contato;
        $novo->email = $request->text_email;
        $novo->data = $request->text_data;
        $novo->endereco = $request->text_endereco;
        $novo->save();
        return redirect('/');
    }


    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
       
    }

    
    public function destroy($id)
    {
        
    }
}

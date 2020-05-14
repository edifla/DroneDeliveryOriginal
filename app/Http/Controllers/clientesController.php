<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\clientes;
use Session;    
class clientesController extends Controller
{
   
    
    //Função pra apresentar a pagina de Login como pagina inicial do site
    public function index()
    {
        if(Session::has('login'))
        {
            return $this->frmLogin();
        }else
        {
            return view('/homepage_index');
        }
    }

    //-------------------------------------------------------------------------------------------------------
    //Area de Login
    //-------------------------------------------------------------------------------------------------------

    public function frmLogin()
    {//Encaminha pra o formulário de Login
        return view('/login');
    }
    
    public function FazerLogin(Request $request)
    {
        $this->validate($request,[
            'text_email'=>'required|email',
            'text_senha'=>'required'
        ]);

        $dados = clientes::where('email', $request->text_email)->first();
        
        $erros_bd ="";

        if(count($dados) == 0 )
            {
                $erros_bd = ['Não existe este email de  usuário'];
                return view('/login',compact('erros_bd'));
            }

        if(!Hash::check($request->text_senha,$dados->senha)){
                    
                $erros_bd = ['Senha incorreta'];
                return view('/login',compact('erros_bd'));

            }
                //Criar sessão
                Session::put('login','sim');
                Session::put('id_cliente',$clientes->nome);
                return redirect('/homepage_index');
    }

    //-------------------------------------------------------------------------------------------------------
    //Area de Registro
    //-------------------------------------------------------------------------------------------------------
    public function frmRegistro()
    {
        //APRESENTAÇÃO DO FORMULARIO DE REGISTRO PARA PODER SER UTILIZADO PELAS OUTRAS FUNÇÕES.
        return view('/registro');
    }

    public function NovoRegistro(Request $request)
    {

            //Validações
        $this->validate($request,[
            'text_nome' =>'required|between:3,14|alpha_num',
            'text_sobrenome' =>'required|between:3,14|alpha_num',
            'text_senha' =>'required|between:5,20',
            'text_senha_repetida' =>'required|same:text_senha',
            'text_contato' =>'required|numeric',
            'text_email' =>'required|email',
            'text_data' =>'required|date',
            'text_endereco' =>'required',
            "text_check_termos" =>'accepted'


        ]);
            //Verificar se ja existe um usuário com o mesmo email cadastrado.
        $dados = clientes::where('email','=',$request->text_email)
                            ->orWhere('contato','=',$request->text_contato)
                            ->get();
        if($dados->count() != 0){
            $erros_bd = [' Email ou número para contado ja estão em uso!'];
            return view ('/registro',compact('erros_bd'));
        }

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
        return redirect('/login');
    }


    //-------------------------------------------------------------------------------------------------------
    //Area de RECUPERAÇÂO DE SENHA
    //-------------------------------------------------------------------------------------------------------
   public function FormRecuperarSenha()
    {
        return view('/recuperar_senha');
    } 
    public function FazerRecuperacaoSenha(Request $request){

        $this->validate($request,[
            'text_email' =>'required|email'
        ]);
        return 'Feito meu patrão';
    }
}

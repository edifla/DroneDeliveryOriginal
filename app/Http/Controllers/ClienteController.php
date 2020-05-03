<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function index()
    {
        
    }

   
    public function create()
    {
        //Talvez seja aqui.
        return view('registro');
    }

    
    public function store(Request $request)
    {
      $cliente = new cliente;
      $cliente= $request ->nome_cliente;
      $cliente= $request ->sobrenome_cliente;
      $cliente= $request ->senha;
      $cliente= $request ->contato;
      $cliente= $request->email;
      $cliente= $request ->data_nascimento;
      $cliente= $request ->endereco;
      $cliente->save();




    }

   
    public function show($id)
    {
        $dados = cliente::where('id_cliente', $id)->get();
        return $dados;
    }

   
    public function edit(cliente $cliente)
    {
       
    }

   
    public function update(Request $request, cliente $cliente)
    {
        
    }

    
    public function destroy(cliente $cliente)
    {
        
    }
}

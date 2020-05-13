@extends('master/HeaderFooter')

    @section ('content')

    <body>
    	
    	<form method="POST" action="/executar_registro_restaurante">

          {{csrf_field()}}
        
                {{--Box do Email--}}
          
          
        <div class="mb-3" >
          <label for="id_nome_restaurante" >Nome do restaurante </label>
          <input type="text" class="form-control"id="id_nome_restaurante" name="text_nome_restaurante" placeholder="Insira um nome." >
          
        </div>
         
         <div class="mb-3" >
          <label for="id_dono" >Dono </label>
          <input type="text" class="form-control"id="id_dono" name="text_dono" placeholder="Informe seu nome." >
          
        </div>
         
         <div class="mb-3" >
          <label for="id_cnpj" >CNPJ </label>
          <input type="text" class="form-control"id="id_cnjp" name="text_cnjp" placeholder="Informe seu Cnjp." >
          
        </div>

         <div class="mb-3" >
          <label for="id_email_restaurante" >Email do restaurante </label>
          <input type="email" class="form-control"id="id_email_restaurante" name="text_email_restaurante" placeholder="Insira o email do restaurante." >
          
        </div>

        </div>

         <div class="mb-3" >
          <label for="id_contato_dono" >Número do dono </label>
          <input type="int" class="form-control"id="id_contato_dono" name="text_contato_dono" placeholder="Insira um número para contato." >
          
        </div>

        <div class="mb-3" >
          <label for="id_descricao" >Descrição do restaurante </label>
          <input type="longText" class="form-control"id="id_descricao" name="text_descricao" placeholder="Informações sobre o seu restaurante." >
          
        </div>


        <div class="mb-3" >
          <label for="id_endereco" >Endereço </label>
          <input type="text" class="form-control"id="id_endereco" name="text_endereco" placeholder="Informe onde seu restaurante esta localizado." >
          
        </div>
          
          
                
       
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-bottom: 35%">Registrar-se</button>
             
      </form>
    </body>
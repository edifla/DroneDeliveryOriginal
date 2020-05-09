@extends('master/HeaderFooter')

    @section ('content')
   
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Registro</h2>
    
  </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Coletando Informações</h4>
      
      {{--Inicio do formulário de registro--}}
      
      <form method="POST" action="/registro">

          {{csrf_field()}}
        {{--Box do primeiro nome--}}
        <div class="row">{{--Formatação dos espaços onde as text box ficam--}}
          <div class="mb-3">{{--Edita o tamanho das text box--}}
            
            <label for="id_nome" >Primeiro nome </label>
            <input type="text" class="form-control" id="id_nome" name="text_nome" placeholder="Ex: Rafael"  required>
            <div class="invalid-feedback">
              Confirme o nome informado.
            </div>
          </div>

                {{--Box do segundo nome--}}
                <div class="mb-3">
                
                <label for="id_sobrenome" >Sobrenome </label>
                <input type="text" class="form-control" id="id_sobrenome" name="text_sobrenome" placeholder="Ex: Costa" required>
                <div class="invalid-feedback">
                  Confirme o sobrenome informado.
                </div>
              </div>
            </div>
        
                {{--Box da senha--}}
        <div class="mb-3">
          <label for="id_senha" >Senha </label>
          
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            
            <input type="password" class="form-control"id="id_senha" name="text_senha" placeholder="20981281" required>
            <div class="invalid-feedback" style="width: 100%;">
              Uma senha  é <strong>obrigatória</strong>
           
            </div>
          </div>
        </div>

                {{--Repetir senha--}}

        <div class="mb-3">
          <label for="id_senha_repetida" >Repita a senha </label>
          
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            
            <input type="password" class="form-control"id="id_senha_repetida" name="text_senha_repetida" placeholder="Repita sua senha" required>
            
              
           
            </div>
          </div>
        </div>


                {{--Box do numero para contato--}}
        <div class="mb-3">
          <label for="id_contato" >Contato </label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
           
            <input type="int" class="form-control"id="id_contato" name="text_contato" placeholder="Ex:(DDD) 982129920" required maxlength="12">
            <div class="invalid-feedback" style="width: 100%;">
              Um numero para contato é <strong>obrigatório</strong>
            </div>
          </div>
        </div>

                {{--Box do Email--}}
        <div class="mb-3">
          <label for="id_email" >Email </label>
          <input type="email" class="form-control"id="id_email" name="text_email" placeholder="seuemail@exemplo.com" required>
          <div class="invalid-feedback">
            Por favor,insira um email valido para receber as atualizações.
          </div>
        </div>
          
                {{--Box da data de nascimento--}}
        <div class="mb-3">
          <label for="id_data" >Data de nascimento</label>
          <input type="date" class="form-control"id="id_data" name="text_data"  required>
          <div class="invalid-feedback">
          </div>
        </div>

                {{--Box do endereço--}}
        <div class="mb-3">
          <label for="id_endereco" >Endereço </label>
          <input type="text" class="form-control"id="id_endereco" name="text_endereco" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
           Por favor,insira seu endereço.
          </div>
        </div>

                {{--Check Box--}}

         <div class="form-group">
          <input type="checkbox" class="form-control"id="check_termos" name="text_check_termos" value="1" >
          <label for='check_termos'> Concordo com os termos e condições. </label>
          
          </div>
        </div>
       
        <button class="btn btn-primary btn-lg btn-block" type="submit ">Finalizar registro</button>
             
      </form>
    </div>
  </div>


</div>

@endsection
</html>
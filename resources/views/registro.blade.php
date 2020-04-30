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
      <form >
        {{--Box do primeiro nome--}}
        <div class="row">{{--Formatação dos espaços onde as text box ficam--}}
          <div class="col-md-6 mb-3">{{--Edita o tamanho das text box--}}
            <label for="nome_cliente">Primeiro nome<span class="text-muted">(Obrigatório)</label>
            <input type="text" class="form-control" id="nome_cliente" placeholder="Ex: Rafael"  required>
            <div class="invalid-feedback">
              Confirme o nome informado.
            </div>
          </div>

            {{--Box do segundo nome--}}
          <div class="col-md-6 mb-3">
            <label for="sobrenome_cliente">Sobrenome<span class="text-muted">(Obrigatório)</label>
            <input type="text" class="form-control" id="sobrenome_cliente" placeholder="Ex: Costa" required>
            <div class="invalid-feedback">
              Confirme o sobrenome informado.
            </div>
          </div>
        </div>
          {{--Box da senha--}}
        <div class="mb-3">
          <label for="senha">Senha<span class="text-muted">(Obrigatório)</label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="password" class="form-control" id="senha" placeholder="Ex: Lilizinha" required>
            <div class="invalid-feedback" style="width: 100%;">
              Uma senha  é <strong>obrigatória</strong>
            </div>
          </div>
        </div>

         {{--Box do numero para contato--}}
        <div class="mb-3">
          <label for="contato">Contato<span class="text-muted">(Obrigatório)</label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="int" class="form-control" id="contato" placeholder="Ex:(DDD) 982129920" required maxlength="12">
            <div class="invalid-feedback" style="width: 100%;">
              Um numero para contato é <strong>obrigatório</strong>
            </div>
          </div>
        </div>

          {{--Box do Email--}}
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Opcional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com">
          <div class="invalid-feedback">
            Por favor,insira um email valido para receber as atualizações.
          </div>
        </div>
          
          {{--Box da data de nascimento--}}
        <div class="mb-3">
          <label for="data_nascimento'">Data de nascimento<span class="text-muted">(Obrigatório)</span></label>
          <input type="date" class="form-control" id="data_nascimento"  required>
          <div class="invalid-feedback">
          </div>
        </div>

          {{--Box do endereço--}}
        <div class="mb-3">
          <label for="endereco">Endereço<span class="text-muted">(Obrigatório)</span></label>
          <input type="text" class="form-control" id="endereco" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
           Por favor,insira seu endereço.
          </div>
        </div>

        {{--Div dos paises,isso aqui eu vou ter que analisar direitinho depois por que essa parte
          de endereço ta muito complicada de fazer na logica--}}
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="nome_pais">País</label>
            <select class="custom-select d-block w-100" id="nome_pais" required>
              <option value="">Escolha...</option>
              <option>Brasil</option>
            </select>
            <div class="invalid-feedback">
              Por favor,escolha um país valido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="nome_estado">Estado</label>
            <select class="custom-select d-block w-100" id="nome_estado" required>
              <option value="">Escolha...</option>
              <option>Pernambuco</option>
            </select>
            <div class="invalid-feedback">
              Por favor,escolha um estado valido.
            </div>
          </div>
          
        {{--Fim da box de endereço--}}

        {{--Aqui eu to procurando um comando pra quando ele clicar em submit ele enviar as informações salva pra uma SEED e ela mandar pro banco de dados pra ficar salvo--}}
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit ">Finalizar registro</button>
             
      </form>
    </div>
  </div>


</div>

@endsection
</html>
@extends('master/HeaderFooter')

@section('content')
    
{{--Div da barra de pesquisa--}}



<div class="heroIMG"> 
  <div class=" p-2 p-md-5 text-white ">
  <div class="col-md-6 px-0">
    <h1>Pesquise por seus pratos favoritos!</h1>
     <input id="pesquisa" type="text" value="" placeholder='Procure aqui'> 
     <input value="Procurar" type="submit"> 
  </div>
</div>
</div>
  {{--fechamento da Div da barra de pesquisa--}}

      {{--Inicio da div com cards de pizzas --}}
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4"><h1>Pizza's</h1>
      <p class="lead">Aqui estão as opções de pizzas mais pedidas</p>
  </div>
    
     <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pizza 01</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"> </small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
              
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Pedir</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pizza 02</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"> </small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Pedir</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pizza 03</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"> </small></h1>
            <ul class="list-unstyled mt-3 mb-4">
             <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Pedir</button>
          </div>
        </div>
      </div>
     </div>
     {{--fechamento da Div de pizzas--}}
     {{--Inicio da Div de bebidas--}}
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4"><h1>Bebidas</h1>
        <p class="lead">Aqui estão as opções de bebidas mais pedidas</p>
    </div>  

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Bebida 01</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor<small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Pedir</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Bebida 01</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
             <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Pedir</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Bebida 03</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Pedir</button>
          </div>
        </div>
      </div>
    </div>
    {{--fechamento da Div de bebidas--}}
    {{--inicio da Div dhamburgues´s--}}
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4"><h1>Hamburguer's</h1>
        <p class="lead">Aqui estão as opções de bebidas mais pedidas</p>
     </div>
        
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Hamburguer 01</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Pedir</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Hamburguer 02</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Pedir</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Hamburguer 03</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$Valor <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Descrição</li>
              <li>Restaurante fornecedor</li>
              <li>Contato</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Pedir</button>
          </div>
        </div>
      </div>
    </div>
          {{--fechamento da Div de hamburguer´s--}}
        
    @endsection
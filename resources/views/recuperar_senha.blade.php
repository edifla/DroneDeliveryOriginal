@extends('master/HeaderFooter')

    @section ('content')
   
    <div class="container">
  <div class="py-5 text-center" >
  
    <h2 style="padding-top: 15%;">Recuperar senha</h2>
    
  </div>


    @include('inc.erros')


    <div class="col-md-8 order-md-1" style="padding-left: 35%">
      <h4 class="mb-3">Coletando Informações</h4>
      
      {{--Inicio do formulário de registro--}}
      
      <form method="POST" action="/executar_rec_senha">

          {{csrf_field()}}
        

                {{--Box do Email--}}
        <div class="mb-3" >
          <label for="id_email" >Email <span ></span></label>
          <input type="email" class="form-control"id="id_email" name="text_email" placeholder="seuemail@exemplo.com" >
          
        </div>
          
                
       
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-bottom: 35%">Recuperar senha</button>
             
      </form>
    </div>
  </div>


</div>

@endsection
</html>
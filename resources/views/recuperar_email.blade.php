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
        

                {{--Box do Email--}}
        <div class="mb-3">
          <label for="id_email" >Email <span ></span></label>
          <input type="email" class="form-control"id="id_email" name="text_email" placeholder="seuemail@exemplo.com" required>
          <div class="invalid-feedback">
            Por favor,insira um email valido para receber as atualizações.
          </div>
        </div>
          
                
       
        <button class="btn btn-primary btn-lg btn-block" type="submit ">Recuperar senha</button>
             
      </form>
    </div>
  </div>


</div>

@endsection
</html>
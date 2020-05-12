@extends('master/HeaderFooter')

    @section ('content')




    
    <div class="py-5 text-center">
  
      <h2 style="padding-top: 10%;">Registro</h2>
      
    </div>
  
     @include('inc.erros')
     
    <div class="containers" style=" padding-left: 25%">

    <div class="col-sm-8">
      <h5 class="mb-3">Coletando Informações</h4>
      
      {{--Inicio do formulário de registro--}}
      
      <form method="POST" action="/registro">

        {{csrf_field()}}
            
      
              <div class="mb-3">{{--Edita o tamanho das text box--}}
                
                <label for="id_nome" >Primeiro nome </label>
                <input type="text" class="form-control" id="id_nome" name="text_nome" placeholder="Ex: Rafael"  >
                 
        
            </div>
                
             
                <div class="mb-3">

                  <label for="id_sobrenome" >Sobrenome </label>
                  <input type="text" class="form-control" id="id_sobrenome" name="text_sobrenome" placeholder="Ex: Costa" >
                  
              
                </div>
               

               
             
                <div class="mb-3">
                  <label for="id_senha" >Senha </label>
                  
                  <div class="input-group">
                    
                    <input type="password" class="form-control"id="id_senha" name="text_senha" placeholder="20981281" >
                    
                  
                </div>
            
              </div>

               
               
                <div class="mb-3">
                  <label for="id_senha_repetida" >Repita a senha </label>
                  
                  <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    
                    <input type="password" class="form-control"id="id_senha_repetida" name="text_senha_repetida" placeholder="Repita sua senha" >
                    
                      
                   
                    </div>
                 
                </div>

                      

              
                  <div class="mb-3">
                    <label for="id_contato" >Contato </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                     
                      <input type="int" class="form-control"id="id_contato" name="text_contato" placeholder="Ex:(DDD) 982129920"  maxlength="12">
                      
                    </div>
               
                </div>

                 
              
                  <div class="mb-3">
                    <label for="id_email" >Email </label>
                    <input type="email" class="form-control"id="id_email" name="text_email" placeholder="seuemail@exemplo.com" >
                    
             
                </div>
                      
              
                  <div class="mb-3">
                    <label for="id_data" >Data de nascimento</label>
                    <input type="date" class="form-control"id="id_data" name="text_data"  >
                    
                  
                </div>
                            
              
                  <div class="mb-3">
                    <label for="id_endereco" >Endereço </label>
                    <input type="text" class="form-control"id="id_endereco" name="text_endereco" placeholder="1234 Main St" >
                    
               
                </div>
                                   
            
                  <div class="form-group">
                    <input type="checkbox"id="check_termos" name="text_check_termos" value="1" >
                    <label for='check_termos'> Concordo com os termos e condições. </label>
                    </div>
                 
                </div>
          </div>

          <div class="row">
  <div class="col-6 col-md-4"></div>
  <div class="col-6 col-md-4">   <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-bottom: 20%">Finalizar registro</button></div>
  <div class="col-6 col-md-4"></div>
</div>
           

        </form>

       
       
      </form>
    </div>
  </div>


</div>


@endsection
</html>
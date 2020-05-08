@extends('master/HeaderFooter')
	
@section('content')
	{{--Div do conteiner das text box--}}
<div class ="hamburguerLogin">
<div class="containerLogin">
	<div class="d-flex pl-5 pb-5 h-100">
		<div class="cardLogin">
			<div class="card-headerLogin">
				<h3>Entrar</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			
			

			{{--Validações de erro --}}
			@include('inc.erros')

			<div class="card-body">
				
				<form method="POST" action="/validacao" >
					{{csrf_field()}}
			 {{--Box do Email--}}
			        <div class="mb-3">
			         <label for="id_email" >Email <span ></span></label>
			         <input type="email" class="form-control"id="id_email" name="text_email"  >
			        </div>

					<div class="mb-3">
          			<label for="id_senha" >Senha<span></label>
          			<div class="input-group">
            		<div class="input-group-prepend">
            		</div>   
            		<input type="password" class="form-control"id="id_senha" name="text_senha"  >


					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
				{{--Fim da div do Login--}}
			</div>
			{{--Div do registra-se se nao tiver uma conta--}}
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					{{--Linha pra linkar pro registro--}}Não tem uma conta?<a href="cliente/create">Registre-se</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</div>
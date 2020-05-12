@extends('master/HeaderFooter')
	
@section('content')
	{{--Div do conteiner das text box--}}
<div class ="hamburguerLogin" >
<div class="containerLogin" style="margin-top: -7%">
	<div class="d-flex pl-5 pb-5 h-100">
		<div class="cardLogin">
			<div class="card-headerLogin">
				<h3>Entrar</h3>
			</div>
			
			

			{{--Validações de erro --}}
				 

				 @include('inc.erros')




			<div class="card-body">
				
				<form method="POST" action="/executarLogin" >
					{{csrf_field()}}
			 {{--Box do Email--}}
					 <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
			         <input type="email" class="form-control"id="id_email" name="text_email" placeholder="Email"  >
			        </div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control"id="id_senha" name="text_senha" placeholder="Senha"  >
					</div>


					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
				{{--Fim da div do Login--}}
			</div>
			{{--Div do registra-se se nao tiver uma conta--}}




			<div class="card-footer" style="padding-top: 50px">
				<div class="d-flex justify-content-center links">
					{{--Linha pra linkar pro registro--}}Não tem uma conta?<a href='/frmregistro'>Registre-se</a>
				</div>
				<div class="d-flex justify-content-center links">
					Esqueceu sua senha?<a href="/recuperar"> Recuperar Senha </a>
				</div>
			</div>


		</div>
	</div>
</div>
</div>
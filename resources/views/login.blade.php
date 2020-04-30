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
			{{--Fechamento da div do conteiner--}}
			{{--Inicio da Div dos input de Email e senha--}}
			<div class="card-body">
				<form action="login" >
					<div>
						<input type="text" class="form-control" placeholder="Email">
						
					</div>
					<div>
						<input type="password" class="form-control" placeholder="Senha">
					</div>
					{{--Lembrar-se--}}
					<div class="row align-items-center remember">
						<input type="checkbox">Lembrar-se
					{{--Fim do Lembrar-se--}}
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
				{{--Fim da div do Login--}}
			</div>
			{{--Div do registra-se se nao tiver uma conta--}}
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					{{--Linha pra linkar pro registro--}}Não tem uma conta?<a href="registro">Registre-se</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Esqueceu sua senha?</a>{{--Essa parte aqui a gente nao fez ainda--}}
				</div>
			</div>
		</div>
	</div>
</div>
</div>
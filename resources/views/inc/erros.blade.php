
		





		@if(count($errors) !=0)
			
			<div class='alert alert-danger'>
			
				@if(count($errors) == 1 )
				
					<p class='titulo-erro'>OPSSS! Algo deu errado</p>
				
				@else

					<p class='titulo-erro'>OPSSS! Varias coisas deram errado</p>

				@endif

				<ul>
					@foreach($errors->all() as $erro)
						
						<li> {{$erro}} </li>
					
					@endforeach
				</ul>
			</div>
		
		@endif	

		{{--ERROS DO BANCO DE DADOS--}}
		@if(isset($erros_bd))
			<div class='alert alert-danger'>
				@foreach($erros_bd as $erro)
				<p> {{ $erro }} </p>	
				@endforeach
			</div>
		@endif
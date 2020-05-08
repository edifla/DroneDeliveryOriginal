@if(count($errors) !=0)
	@foreach($errors->all() as $erros)
		<p class='alert alert-danger'>{{$erros}} </p>
	@endforeach
@endif	
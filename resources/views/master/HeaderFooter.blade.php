<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drone Delivery</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

  <header>
		<nav class="navbar fixed-top ">
			<div class="container">
				<!--logo-->
				<div class="navbar-header">
					<a class="navbar-brand" href="/homepage"><img id="logo" src="imagens/logo.png" width="70px"> </a>
			
					
				</div>
				<div id="menu">
				
          <a class="p-2 " href="#">Restaurantes</a>
          <a class="p-2 " href="#">Sobre Nós</a>
          <a class="p-2 " href="#">Duvidas</a>
          <a class="p-2 " href="/">Login</a>
          <a class="button btn1" href="/frmregistro">Registrar-se </a>
			</div>
				</div>
		
		</nav>

	</header>

 {{-- AQUI TÁ VINDO A NOSSA HOME PAGE  --}}
   @yield('content') 
     
   {{-- NOSSO FOOTER QUE EU TO TENTANDO DEIXAR ELE FULL  --}}
   <footer class="blog-footer">
    <p>Site criado por Rafael e Nathan </p>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </footer>
  </body>


</html>
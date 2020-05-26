<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">

<title>Sucesso</title>
</head>
<body>
	<form class="xl" method="GET">
	@csrf
		<div class="container bg-success">
			<div class="row justify-content-center">
				<div class="col-8">
					<h1 class="text-light bg-success">Produto alterado com sucesso!!!</h1>
				</div>
			</div>
			<div class="row">
  				<div class="col-md-3 offset-md-5">
            		<p><a href="{{route('login.Produtos')}}" class="text-white bg-primary">Voltar para lista de produtos</a></p>
  				</div>
			</div>
			<div class="row">
				
			</div>
		</div>
	</form>


	<script src="{{ asset('site/bootstrap.js') }}"></script>
	<script src="{{ asset('site/jquery.js') }}"></script>

</body>
</html>
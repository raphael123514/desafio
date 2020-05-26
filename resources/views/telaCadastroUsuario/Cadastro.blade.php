<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">

<title>Cadastrar</title>
</head>
<body>

	<form class="xl" method="POST" action="{{route('cadastro.do')}}">
		@csrf
		<div class="container bg-secondary">
			<div class="row justify-content-center">
				<div class=".col-sm-6">
					<h1>Cadastro</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 offset-md-3">
					<label>Nome: </label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="input-group input-group-sm mb-3">
						<input class="form-control" type="text" name="nome"
							placeholder="Nome">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<label>E-mail</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="input-group input-group-sm mb-3">
						<input class="form-control" type="text" name="email"
							placeholder="exemplo@exemplo.com">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<label>Senha</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="input-group input-group-sm mb-3">
						<input class="form-control" type="text" name="senha"
							placeholder="senha">
					</div>
				</div>
			</div>
			
			@if($errors -> all()) @foreach($errors->all() as $error)
				<div class="alert alert-danger" role="alert">{{$error}}</div>
			@endforeach @endif
			
			<div class="row">
				<div class="col-md-6 offset-md-5">
					<button class="btn btn-lg btn-primary " name="btnConfAdicionar">Confirmar</button>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 offset-md-7">
						<a href="{{route('login')}}" class="bg-dark">Para fazer login
							clique aqui</a>
				</div>
			</div>
		</div>
	</form>

	<script src="{{ asset('site/bootstrap.js') }}"></script>
	<script src="{{ asset('site/jquery.js') }}"></script>

</body>
</html>
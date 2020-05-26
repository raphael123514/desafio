<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
<link rel="stylesheet" href="site/layout.css">
<title>Login</title>
</head>
<body>

	<form class="form-signin" method="post" action="{{route('login.do')}}">
		@csrf
		<div class="container areaLogin">

			<div class="box">
				@if($errors -> all()) @foreach($errors->all() as $error)
				<div class="alert alert-danger" role="alert">{{$error}}</div>
				@endforeach @endif
				<h3>Email:</h3>
				<div class="input-group input-group-sm mb-3">
					<input class="form-control" name="txtEmail" type="text"
						placeholder="E-mail" />
				</div>
				<h3>Senha:</h3>
				<div class="input-group input-group-sm mb-3">
					<input class="form-control" name="txtSenha" type="password"
						placeholder="Senha" />
				</div>

				<div class="row">
					<div class="col-8">
						<button class="btn btn-lg btn-success " id="btnEntrar">Entrar</button>
					</div>
					<div class="col">
						<p>
							<a href="{{route('cadastro')}}" class="text-danger">Cadastrar-se</a>
						</p>

					</div>
				</div>
			</div>
		</div>
	</form>
	<script src="{{ asset('site/bootstrap.js') }}"></script>
	<script src="{{ asset('site/jquery.js') }}"></script>
</body>
</html>



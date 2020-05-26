<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">

<title>Adicionar produtos</title>
</head>
<body>
	<form class=" xl bg-secondary" method="POST" style="height:900px;" action="{{route('login.produtos.adicionar.do')}}" enctype="multipart/form-data">
		@csrf
		<div class="container bg-dark " style="height:900px;">
			<div class="row justify-content-center">
				<div class=".col-sm-6">
    				<h1 class="text-white bg-dark" >Adicionar novo produto</h1>		
				</div>
			</div>
			
			<div class="row justify-content-center">
				<div class="col-md-10 offset-md-2">
    				<label class="text-white bg-dark" >Imagem:</label>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 offset-md-2">
    				<input type="file" class="form-control-file bg-white" name="imagem">		
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-2">
    				<label class="text-white bg-dark" >Nome do produto:</label>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 offset-md-2">
    				<input class="form-control" name="nome" type="text" placeholder="Nome do produto">		
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-10 offset-md-2">
    				<label class="text-white bg-dark" >Descrição do produto:</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
    				<textarea class="form-control" name="descricao" rows="3"></textarea>	
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-10 offset-md-2">
    				<label class="text-white bg-dark" >Preço:</label>
				</div>
			</div>	
			
			<div class="row">
       			<div class="col-md-8 offset-md-2">
	   				<input class="form-control" name="preco" type="text" placeholder="Preço R$">		
       			</div>
			</div>					
    		<div class="row justify-content-center">
           			<div class=".col-md-3 .offset-md-10">
           				<br>
           				<br>
           				<button type="submit" class="btn btn-lg btn-info" id="btnAdicionar">Adicionar</button>
           			</div>
    		</div>
    		<div class="row justify-content-center">
    			<div class=".col-md-0 .offset-md-3">
           			<a href="{{route('login.Produtos')}}" class="text-warning">VOLTAR</a>
           		</div>
           	</div>		
		</div>
		
	</form>
	

	<script src="{{ asset('site/bootstrap.js') }}"></script>
	<script src="{{ asset('site/jquery.js') }}"></script>

</body>
</html>
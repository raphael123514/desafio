<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
<link rel="stylesheet" href="site/layout.css">
<title>Principal</title>
</head>
<body>

	<form class="bg-secondary" method="POST" style="height:900px;" action="{{route('login.produtos.do')}}">
		@csrf
		<div class="container">
		
    		<div class="row justify-content-betweenr">
            	<div class="col-11">
                	<h1 class="text-white">Painel Principal</h1>
            	</div>
            	<div class="col-1">
                		<p><a href="{{route('Produtos.logout')}}" class="text-white bg-danger">SAIR</a></p>
            	</div>
    		</div>
    		<div class="row justify-content-center">
            	
    		</div>
       		
       		<div class="row"> 
       			<table class="table table-striped table-dark table-bordered">
                      <thead class="thead-ligth">
                        <tr>
                          <th scope="col">Nome</th>
                          <th scope="col">Preço</th>
                          <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($produtos as $produto)
                          	<tr>
                              <td id="produto">{{$produto -> nome}}</td>
                              <td>{{$produto -> preco}}</td>
                              <td>
	                          	<a href="/Produtos/Editar/{{$produto -> id}}">Editar</a>
                              </td>
                            </tr>
             			 @endforeach
                      </tbody>
                    </table>
       		</div>
       		<div class="row justify-content-center">
       			<div class="col-md-6 offset-md-5">
       				<br>
       				<br>
       				<button type="submit" class="btn btn-lg btn-info" id="btnAlterar">Adicionar</button>
       			</div>
       		</div>
		</div>
	</form>
	<script src="{{ asset('site/bootstrap.js') }}"></script>
	<script src="{{ asset('site/jquery.js') }}"></script>
	<script type="<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>"></script>
</body>
</html>



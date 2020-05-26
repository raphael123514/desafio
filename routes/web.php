<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('telaLogin');
// });


Route::get('/','UserController@mostraTelaLogin') -> name('login');
Route::post('/do','UserController@FazerLogin') -> name('login.do');
Route::get('/cadastro','UserController@FazerCadastro') -> name('cadastro');
Route::post('/cadastro/do','CadastroController@cadastrarUsuario') -> name('cadastro.do');
Route::get('/cadastro/Sucesso','CadastroController@mostraTelaSucesso') -> name('cadastro.sucesso');




Route::get('/Produtos','ProdutoController@mostraTelaPrincipal') -> name('login.Produtos');
Route::get('/Produtos/Logout','UserController@logout') -> name('Produtos.logout');
Route::get('/Produtos/Editar/{id}','ProdutoController@mostraTelaEditar') -> name('login.Produtos.editar');
Route::post('/Produtos/editar','ProdutoController@alterarProduto') -> name('login.produtos.editar.do');
Route::get('/Produtos/editar/Sucesso','ProdutoController@mostrarAlterarSucesso') -> name('login.produtos.alterar.sucesso');

Route::post('/Produtos/do','ProdutoController@mostraTelaAddProdutos') -> name('login.produtos.do');
Route::get('/Produtos/Adicionar','ProdutoController@mostra') -> name('login.produtos.adicionar');
Route::post('/Produtos/Adicionar/do','ProdutoController@adicionarProduto') -> name('login.produtos.adicionar.do');


Route::get('/Produtos/Adicionar/sucesso','ProdutoController@mostraTelaSucesso') -> name('login.produtos.adicionar.sucesso');

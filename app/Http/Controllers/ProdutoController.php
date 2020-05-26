<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Route;
use Illuminate\Http\File;
use App\Models\produtos;
use phpDocumentor\Reflection\Types\Null_;

class ProdutoController extends Controller
{
    public function mostraTelaPrincipal(){
        if(Auth::check() === true){
            $produtos = DB::table('produtos')->get();
            return view('telaProdutos.PainelProdutos',[
                'produtos' => $produtos
            ]);
        }
        
        return redirect()-> route('login');

    }
    
    public function mostraTelaAddProdutos(Request $request) {
        if(Auth::check() === true){
            return redirect() -> route('login.produtos.adicionar');
        }
        
        return redirect()-> route('login');
    }

    public function mostra(){
        if(Auth::check() === true){
            return view('telaAdicionarProdutos.adicionarProdutos');
        }
        return redirect()-> route('login');
    }
    
    public function adicionarProduto(Request $request){
        if(Auth::check() === true){
            $arquivo = $request -> file('imagem');
            $input ['imagemname'] = time() . '.' . $arquivo -> getClientOriginalExtension();
            $destino = public_path('/storage/imagens');
            $arquivo -> move($destino,$input ['imagemname']);
            
            $imagem = $destino . $input ['imagemname'];
            
            $imagemB = str_replace('\\','/',$imagem);
//             $img = str_replace('\\','\',$imagemB);
//             dd($img);
            $nome = $request -> nome;
            $descricao = $request -> descricao;
            $preco = $request -> preco;
            
            $produtos = new produtos();
            $produtos -> foto = $imagemB;
            $produtos -> nome = $nome;
            $produtos -> descricao = $descricao;
            $produtos -> preco = $preco;
            $produtos -> save();
            
            return redirect() -> route('login.produtos.adicionar.sucesso');
        }
        
        return redirect()-> route('login');
    }
    
    public function mostraTelaSucesso() {
        return view('telaAdicionarProdutos.sucesso');
    }
    
    public function mostraTelaEditar($id){
        if(Auth::check() === true){
            $produto = produtos::find($id);
            $produtos = produtos::all();
            
            if($produto){
                return view('telaAlterarProdutos.Editar',compact('produtos','produto'));                
            }
        }
    }
    
    public function alterarProduto(Request $request) {
        if(Auth::check() === true){
            $id = $request -> id;
            
            $produto = produtos::find($id);
            
            $arquivo = $request -> file('imagem');
            if(!$arquivo  == null){
                $input ['imagemname'] = time() . '.' . $arquivo -> getClientOriginalExtension();
                $destino = public_path('/storage/imagens');
                $arquivo -> move($destino,$input ['imagemname']);
                $imagem = $destino . $input ['imagemname'];
                $imagemB = str_replace('\\','/',$imagem);
                $produto -> foto = $imagemB;
            }
                $nome = $request -> nome;
                $descricao = $request -> descricao;
                $preco = $request -> preco;
                
                
                
                $produto -> nome = $nome;
                $produto -> descricao = $descricao;
                $produto -> preco = $preco;
                $produto -> save();
                return redirect() -> route('login.produtos.alterar.sucesso');
                
           
        }
    }
    
    public function mostrarAlterarSucesso(){
        return view ('telaAlterarProdutos.SucessoAlterar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function cadastrarUsuario(Request $request){
        
        // tratamento de erros para notificar o usuario o que tem de errado
            $request -> validate([
                'nome' => 'required',
                'email'=> 'required|email',
                'senha'=> 'required',
            ],[
                'nome.required' =>'Campo nome é obrigatório',
                'email.required' => 'Campo e-mail é obrigatório',
                'email' => 'Digite um e-mail válido',
                'senha.required' => 'Campo senha é obrigatório',
            ]);
            
            $nome = $request -> nome;
            $email = $request -> email;
            $senha = $request -> senha;
            
            //caso nao tenha nenhum erro ele insere os valores 
            $user = new User();
            $user->name = $nome;
            $user->email = $email;
            $user->password = Hash::make($senha);
            $user->save();
            return redirect() -> route('cadastro.sucesso');
    }
    
    public function mostraTelaSucesso(){
        return view('telaCadastroUsuario.Sucesso');
    }
}

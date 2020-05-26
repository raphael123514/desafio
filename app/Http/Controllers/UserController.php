<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    
    public function mostraTelaLogin() {
        return view('telaLogin.Login');        
    }
    
    public function FazerLogin(Request $request) {
        if(!filter_var($request -> txtEmail,FILTER_VALIDATE_EMAIL)){
            return redirect() -> back() -> withInput() -> withErrors(['O e-mail não é válido']);
        }
        $credencias = [
            'email' => $request->txtEmail,
            'password' => $request->txtSenha
        ];
        if (Auth::attempt($credencias)) {
            return redirect() -> Route('login.Produtos');
        }
        return redirect() -> back() -> withInput() -> withErrors(['Os dados informados não conferem']);
    }
    
    public function FazerCadastro(Request $request) {
        return view('telaCadastroUsuario.Cadastro');
    }
    
    public function logout(){
        Auth::logout();
        return redirect() -> route('login');
    }
    
}
 
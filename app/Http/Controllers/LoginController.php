<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class LoginController extends Controller
{
    public function login(){
        return view('login');
     }
  
     public function auth(Request $request){
        $pessoas = Pessoa::all();
        $chave = false;
        foreach($pessoas as $pessoa){
           if($pessoa->nome == $request->nome && $pessoa->senha == $request->senha){
              $chave = true;
           }
        }
        if($chave == true){
           return redirect('/pessoa')->with('jasd7asd76sd87a7ssydgjx','Seja Bem-Vindo');
        }
        else{
           return redirect('/login')->with('msg','Usuario não cadastrado!');
        }
     }
     public function cadUsuario(){
        return view('cadastro_usuario');
     }
     public function upUsuario(Request $request){
           $pessoa = new Pessoa;
  
           $pessoa->nome = $request->nome;
           $pessoa->hobby = $request->hobby;
           $pessoa->idade = $request->idade;
           $pessoa->escolaridade = $request->escolaridade;
           $pessoa->senha = $request->senha;
  
           $pessoa->save();
  
           return redirect('/login');
     }
     public function btnAuth(){
        return redirect('/')->with('jasd7asd76sd87a7ssydgjx','Seja Bem-Vindo');
     }
}

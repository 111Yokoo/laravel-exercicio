<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    public function Pessoa(){
        $pessoas = Pessoa::all();

        return view('pessoa', ['pessoas' => $pessoas]);
    }
    public function cadPessoa(){
        return view('cadPessoa');
    }
    public function formPessoa(){
        $pessoas = Pessoa::all();
        $request = $_GET;
        $chave = true;
        foreach($pessoas as $pessoa){
            if($pessoa->nome == $request['nome']){
                $chave = false;
            }
        }
        if($chave == true){
            $pessoa = new Pessoa;

            $pessoa->nome = $request['nome'];
            $pessoa->hobby = $request['hobby'];
            $pessoa->idade = $request['idade'];
            $pessoa->escolaridade = $request['escolaridade'];
            $pessoa->save();
            return redirect('/cadPessoa')->with('msg', 'Aluno Cadastrado');
        }else{
            return redirect('/cadPessoa')->with('msg', 'Aluno Existente');
        }
    }
    public function destroy(int $id){
        Pessoa::findOrFail($id)->delete();
        return redirect('/pessoa')->with('msg','Aluno Excluido com Sucesso!');
     }
  
     public function edit(int $id){
        $pessoa = Pessoa::findOrFail($id);
        return view('edit',['pessoa'=>$pessoa]);
     }
  
     public function update(Request $request){
        Pessoa::findOrFail($request->id)->update($request->all());
        return redirect('/pessoa')->with('msg','Aluno Editado com Sucesso!');
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function Carrinho(int $id_produto, int $quantidade = 1){
        $pagina = "Página Carrinho";
        $dados = array($id_produto, $quantidade);
        return view('parametros', compact('pagina', "dados"));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function Produtos(){
        $pagina = "Página Produtos";
        return view('mensagem', ['pagina' => $pagina]);
    }
}

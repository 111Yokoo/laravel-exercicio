<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function Estoque(){
        $pagina = "Página Estoque";
        return view('mensagem', ['pagina' => $pagina]);
    }
}

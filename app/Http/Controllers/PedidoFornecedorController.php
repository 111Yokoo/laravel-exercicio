<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoFornecedorController extends Controller
{
    public function PedidoFornecedor(int $id_produto, int $quantidade = 1){
        $pagina = "Página Pedido Fornecedor";
        $dados = array($id_produto, $quantidade);
        return view('parametros', compact('pagina', "dados"));
    }
}

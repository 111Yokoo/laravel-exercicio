<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $pagina = "Página Inicial";
        return view('mensagem', ['pagina' => $pagina]);
    }
}

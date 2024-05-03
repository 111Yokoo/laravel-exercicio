<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $pagina = "Página Inicial";
        $esportes = [
            0=>['esporte'=>'Futebol','numero_de_jogadores'=>'11','tipo'=>'E','idolo'=>'Pelé','pais_de_origem'=>'Inglaterra'],
            1=>['esporte'=>'Tenis','numero_de_jogadores'=>'1','tipo'=>'I','idolo'=>'Roger Federer','pais_de_origem'=>'França'],
            2=>['esporte'=>'Basquete','numero_de_jogadores'=>'5','tipo'=>'E','idolo'=>'Michael Jordan','pais_de_origem'=>''],
            3=>['esporte'=>'Rugby','numero_de_jogadores'=>'15','tipo'=>'E','idolo'=>'Jonah Lomu','pais_de_origem'=>'Nova Zelândia'],
            4=>['esporte'=>'Vôlei','numero_de_jogadores'=>'6','tipo'=>'E','idolo'=>'Giba','pais_de_origem'=>''],
        ];
        return view('home', compact('pagina', 'esportes'));
    }
}

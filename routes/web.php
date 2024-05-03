<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/intranet')->group(function(){
    Route::get('/estoque', 'EstoqueController@Estoque');
    Route::get('/pedidoFornecedor/{id_produto}/{quantidade?}', 'PedidoFornecedorController@PedidoFornecedor')->where('id_produto', '[0-9]+')->where('quantidade', '[0-9]+');
});
Route::get('/home', 'HomeController@Home')->name('home');
Route::get('/produtos', 'ProdutosController@Produtos');
Route::get('/carrinho/{id_produto}/{quantidade?}', 'CarrinhoController@Carrinho')->where('id_produto', '[0-9]+')->where('quantidade', '[0-9]+');
Route::fallback(function(){
    return 'Página não existe.<a href="'.route('home').'">Clique aqui</a> para retornar';
});


























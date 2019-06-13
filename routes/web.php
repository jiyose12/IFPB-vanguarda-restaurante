<?php

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

Route::get('/', function () {
    return 'Primeira lógica com Laravel';
});

Route::get('/itens', 'ItensController@listarItens')
    ->name('listar_itens');

Route::get('/itens/mostraritens/{id?}', 'ItensController@mostrarItens')->where('id', '[0-9]+');

Route::get('/itens/novositens', 'ItensController@novosItens')
    ->name('criar_itens');

Route::post('/itens/adiciona', 'ItensController@adicionaItens');

Route::delete('/itens/remove/{id}', 'ItensController@removeItens');

Route::get('/menu', 'PedidosController@listarMenu')
    ->name('menu');

Route::get('/menu/findByName', 'PedidosController@findByName');

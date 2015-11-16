<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Rota principal que acessa a página para consulta de opções de entregas
Route::get('/', function () {
    return view('home');
});

#Rota de teste para debugar template base
Route::get('/app', function () {
    return view('app');
});


#Rotas para manipular os dados da entidade Transportadora
Route::resource('transportadoras','TransportadoraController@index');
Route::resource('transportadoras-inserir','TransportadoraController@create');
Route::post('transportadoras/store','TransportadoraController@store');
Route::get('transportadoras/{id}/edit','TransportadoraController@edit');
Route::put('transportadoras/{id}/update','TransportadoraController@update');

#Rotas para manipular os dados da entidade FaixaCep
Route::resource('faixas-de-cep','FaixaCepController@index');
Route::resource('faixas-de-cep-inserir','FaixaPesoController@create');
Route::post('cep/store','FaixaCepController@store');

#Rotas para manipular os dados da entidade Peso
Route::resource('faixas-de-peso','FaixaPesoController@index');
Route::resource('faixas-de-peso-inserir','FaixaPesoController@create');
Route::post('peso/store','FaixaPesoController@store');

#Rotas para manipular os dados da entidade ValorFcFpTp
Route::resource('opcoes-de-frete','ValorFcFpTpController@index');
Route::resource('faixas-de-peso-inserir','ValorFcFpTpController@create');

#Rota para realizar consulta de opções de frete via post
Route::post('/consulta','TransportadoraController@consulta');

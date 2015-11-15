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

Route::get('/app', function () {
    return view('app');
});

Route::resource('transportadoras','Transportadora@index');
Route::resource('transportadoras-inserir','Transportadora@create');

#Rotas para editar Transportadora
Route::get('transportadoras/{id}/edit','Transportadora@edit');
Route::put('transportadoras/{id}/update','Transportadora@update');

#Rota para realizar consulta de opções de frete via post
Route::post('/consulta','Transportadora@consulta');

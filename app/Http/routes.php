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

Route::get('/', function () {
    return view('home');
});

Route::get('/app', function () {
    return view('app');
});

Route::resource('transportadoras','Transportadora@index');
Route::resource('transportadoras-inserir','Transportadora@create');
Route::resource('transportadoras/editar/{{$id}}','Transportadora@store');
Route::post('/consulta','Transportadora@consulta');

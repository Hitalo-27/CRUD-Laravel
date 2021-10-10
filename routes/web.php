<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/generos', 'App\Http\Controllers\GeneroController@exibirGeneros');

Route::get('/generos/{id}', 'App\Http\Controllers\GeneroController@destroy');

Route::get('/insert', function () {
    return view('insert');
});

Route::post('/genero/inserir', 'App\Http\Controllers\GeneroController@store');

Route::get('/genero-editar/{id}/editar', 'App\Http\Controllers\GeneroController@edit');

Route::post('/genero-alterar/{id}', 'App\Http\Controllers\GeneroController@update');

Route::get('/genero-json', 'App\Http\Controllers\GeneroController@exibirJson');
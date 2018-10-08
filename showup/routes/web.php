<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::Routes();
//Rotas artista
Route::get('/register-artista','ArtistaController@index')->name('register.artista');

//Rotas Contratante
Route::get('/register-contratante','ContratanteController@index')->name('register.contratante');
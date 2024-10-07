<?php

use Illuminate\Support\Facades\Route;
use  App\Livewire\BuscarCep;
use App\Livewire\BuscarCnpj;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buscar-cep', BuscarCep::class)->name('buscar-cep');
Route::get('/buscar-cnpj', BuscarCnpj::class)->name('buscar-cnpj');

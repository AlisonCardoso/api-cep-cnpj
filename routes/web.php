<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Livewire\BuscarCep;
use App\Livewire\BuscarCnpj;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/buscar-cep', BuscarCep::class)->name('buscar-cep');
Route::get('/buscar-cnpj', BuscarCnpj::class)->name('buscar-cnpj');


require __DIR__.'/auth.php';

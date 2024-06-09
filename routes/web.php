<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});
//Set Rotas parao CRUD de Computadors
Route::resource('/produtos', App\Http\Controllers\ProdutoController::class);
Route::resource('/produto', App\Http\Controllers\ProdutoController::class);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);


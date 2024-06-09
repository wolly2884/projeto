<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index']);
//Set Rotas parao CRUD de Computadors
Route::resource('/produtos', app\Http\Controllers\ProdutoController::class);
Route::resource('/produto', app\Http\Controllers\ProdutoController::class);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);


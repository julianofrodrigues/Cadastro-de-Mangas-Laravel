<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;

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

//Rota Exibir
Route::get('/', [MangaController::class, 'index'])->name('index');

//Rota Criar
Route::get('/create', [MangaController::class, 'create']);
Route::post('/store', [MangaController::class, 'store'])->name('manga.store');

//Rota Editar
Route::get('/edit/{id}', [MangaController::class, 'edit']);
Route::post('/update/{id}', [MangaController::class, 'update']);


//Rota Deletar
Route::get('/delete/{id}', [MangaController::class, 'destroy']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('livros')->group(function () {
    Route::get('/', [LivrosController::class, 'index'])->name('bookshelf.livros.index');
    Route::get('/create', [LivrosController::class, 'create'])->name('bookshelf.livros.create');
    Route::post('/', [LivrosController::class, 'store'])->name('bookshelf.livros.store');
    Route::get('/edit/{id}', [LivrosController::class, 'edit'])->name('bookshelf.livros.edit');
});

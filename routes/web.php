<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MakalahController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\ProsidingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}/update', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}/update', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{id}/destroy', [ArticleController::class, 'destroy'])->name('articles.destroy');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/authors', [AuthorController::class,'index'])->name('authors.index');
Route::post('/authors', [AuthorController::class,'store'])->name('authors.store');
Route::delete('/authors/{id}', [AuthorController::class,'destroy'])->name('authors.destroy');
Route::get('/authors/{id}', [AuthorController:: class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}', [AuthorController:: class, 'update'])->name('authors.update');

Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::post('/books', [BookController::class,'store'])->name('books.store');
Route::delete('/books/{id}', [BookController::class,'destroy'])->name('books.destroy');
Route::get('/books/{id}', [BookController:: class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController:: class, 'update'])->name('books.update');

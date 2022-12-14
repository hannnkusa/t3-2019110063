<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::resource('books', BookController::class);
Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/create', [BookController::class,'create'])->name('books.create');
Route::post('/books', [BookController::class,'store'])->name('books.store');
Route::get('/books/{movie}', [BookController::class,'show'])->name('books.show');
Route::get('/books/{movie}/edit', [BookController::class,'edit'])->name('books.edit');
Route::patch('/books/{movie}', [BookController::class,'update'])->name('books.update');
Route::delete('/books/{movie}', [BookController::class,'destroy'])->name('books.destroy');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
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

Route::get('/home', [LibraryController::class, 'index'])->name('home');
Route::get('/category/{category}', [LibraryController::class, 'filterByCategory'])->name('category');
Route::get('/about-us', [LibraryController::class, 'about'])->name('about');
Route::get('/book/{id}', [LibraryController::class, 'detail'])->name('book.detail');
<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::middleware(['web', 'auth'])->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::group(['middleware' => 'role:1'], function () {
        Route::resource('authors', AuthorsController::class);
        Route::resource('books', BooksController::class);
    });
});

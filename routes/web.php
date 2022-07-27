<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']) -> name('index');
Route::get('/about', [HomeController::class, 'about']) -> name('about');
Route::get('/contact', [HomeController::class, 'contact']) -> name('contact');
Route::get('/package', [HomeController::class, 'package']) -> name('package');
// Route::get('/book', [HomeController::class, 'book']) -> name('book');

Route::resource('book', BookController::class);

<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
Route::get('/berita', [PagesController::class, 'berita'])->name('berita');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/layanan', [PagesController::class, 'layanan'])->name('layanan');
Route::get('/login', [PagesController::class, 'login'])->name('login');
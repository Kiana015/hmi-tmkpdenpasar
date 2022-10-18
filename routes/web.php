<?php

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\landingpage::class, 'index'])->name('landingpage');
Route::get('/berita', [App\Http\Controllers\landingpage::class, 'berita'])->name('berita');
Route::get('/detailBerita/{id}', [App\Http\Controllers\landingpage::class, 'detailBerita'])->name('berita');
Route::get('/panduanHmi', [App\Http\Controllers\landingpage::class, 'panduanHmi'])->name('panduanHmi');

// Route::middleware(['auth', 'user-access:CA'])->group(function () {
// });
// Route::middleware(['auth', 'user-access:Kader'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:Ketum'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:Sekum'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:Bendum'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:Kabid'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
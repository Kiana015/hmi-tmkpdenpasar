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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\landingpage::class, 'index'])->name('landingpage');
Route::get('/berita', [App\Http\Controllers\landingpage::class, 'berita'])->name('berita');
Route::get('/detailBerita/{id}', [App\Http\Controllers\landingpage::class, 'detailBerita'])->name('detaiilBerita');
Route::get('/panduanHmi', [App\Http\Controllers\landingpage::class, 'panduanHmi'])->name('panduanHmi');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware(['user-access:0'])->group(function (){
        
    });
    Route::middleware(['user-access:1'])->group(function (){
        
    });
    Route::middleware(['user-access:2'])->group(function (){
        
    });
    Route::middleware(['user-access:3'])->group(function (){
        
    });
    Route::middleware(['user-access:4'])->group(function (){
        
    });
    Route::middleware(['user-access:5'])->group(function (){
        
    });
});

// Route::middleware(['auth', 'user-access:0'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:1'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:2'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:3'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:4'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:5'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
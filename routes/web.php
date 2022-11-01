<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\tryController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somethinsg great!
*/
// Route::get('/', function () {return view('/layout/main');});
// Route::get('/sakura', function () {return view('/layout/sakura');});
// Route::get('/melati', function () {return view('/layout/melati');});
// Route::get('/mawar', function () {return view('/layout/mawar');});
// Route::get('/anggrek', function () {return view('/layout/anggrek');});

Route::get('/', [tryController::class, 'panggil_main']);
// Route::get('/sakura', [tryController::class, 'panggil_sakura']);
// Route::get('/melati', [tryController::class, 'panggil_melati']);
// Route::get('/mawar', [tryController::class, 'panggil_mawar']);
// Route::get('/anggrek', [tryController::class, 'panggil_anggrek']);

// rute menuju file index
Route::get('/buku', [bukuController::class, 'index']);
Route::get('/buku/create', [bukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store', [bukuController::class, 'store'])->name('buku.store');
Route::post('/buku/delete/{id}', [bukuController::class, 'destroy'])->name('buku.destroy');
Route::post('/buku/edit/{id}', [bukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/update/{id}', [bukuController::class, 'update'])->name('buku.update');
Route::get('/buku/search', [bukuController::class, 'search'])->name('buku.search');
Auth::routes();

Route::get('/home', [App\Http\Controllers\BukuController::class, 'index'])->name('index');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

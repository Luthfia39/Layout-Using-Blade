<?php

use App\Http\Controllers\accountController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\showBookController;
use App\Http\Controllers\tryController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Model_Buku;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', [tryController::class, 'panggil_main']);
// Route::get('/sakura', [tryController::class, 'panggil_sakura']);
// Route::get('/melati', [tryController::class, 'panggil_melati']);
// Route::get('/mawar', [tryController::class, 'panggil_mawar']);
// Route::get('/anggrek', [tryController::class, 'panggil_anggrek']);

// rute menuju file index
// Route::get('/', function () {return view('/buku/welcome');});
// Route::get('/home', [showBookController::class, 'index'])->name('index');
// Route::get('/buku/search', [showBookController::class, 'search'])->name('buku.search');

// buku

Route::get('/home', [bukuController::class, 'index'])->name('index');
Route::get('/buku/create', [bukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store', [bukuController::class, 'store'])->name('buku.store');
Route::post('/buku/delete/{id}', [bukuController::class, 'destroy'])->name('buku.destroy');
Route::post('/buku/edit/{id}', [bukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/update/{id}', [bukuController::class, 'update'])->name('buku.update');
Route::get('/buku/search', [bukuController::class, 'search'])->name('buku.search');
Route::post('/detail-buku/{judul}', [bukuController::class, 'galbuku'])->name('buku.detail');
Auth::routes();

// user
Route::get('/user', [accountController::class, 'index'])->name('user.index');
Route::get('/user/create', [accountController::class, 'create'])->name('user.create');
Route::post('/user/store', [accountController::class, 'store'])->name('user.store');
Route::post('/user/delete/{id}', [accountController::class, 'destroy'])->name('user.destroy');
Route::post('/user/edit/{id}', [accountController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [accountController::class, 'update'])->name('user.update');
Auth::routes();

// image
Route::get('/', function (){return view('/welcome');});
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
Route::post('/galeri/delete/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
Route::post('/galeri/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
Route::post('/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
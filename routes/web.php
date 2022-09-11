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

Route::get('/', function () {
    return view('/layout/main');
});
Route::get('/sakura', function () {
    return view('/layout/sakura');
});
Route::get('/melati', function () {
    return view('/layout/melati');
});
Route::get('/mawar', function () {
    return view('/layout/mawar');
});
Route::get('/anggrek', function () {
    return view('/layout/anggrek');
});
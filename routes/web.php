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
    return view('welcome');
});

Route::get('/ceritaSatu', function () {
    return view('cerita-satu');
});

Route::get('/ceritaDua', function () {
    return view('cerita-dua');
});

Route::get('/ceritaTiga', function () {
    return view('cerita-tiga');
});

Route::get('/ceritaEmpat', function () {
    return view('cerita-empat');
});

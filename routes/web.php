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

//PRAKTIKUM 1
//nomor1
Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel";}) -> name('hello'); 
//nomor2 
Route::get('/about', function () {
    echo "2041720233 <br>";
    echo "Thirsya Widya Sulaiman <br>";
    echo "TI-2G";
}) -> name('about');
//nomor3 
Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman Artikel dengan ID: ".$id;
});

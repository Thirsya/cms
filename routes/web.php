<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Models\chef;
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
//Route::get('/', function () {
    //echo "Hi! Selamat Datang di Website Laravel";}) -> name('hello'); 
//nomor2 
//Route::get('/about', function () {
    //echo "2041720233 <br>";
    //echo "Thirsya Widya Sulaiman <br>";
    //echo "TI-2G";
//}) -> name('about');
//nomor3 
//Route::get('/articles/{id}', function ($id) {
    //echo "Ini adalah halaman Artikel dengan ID: ".$id;
//});

//PRAKTIKUM 2 
//Route::get('/',[PageController::class, 'index']);
//Route::get('/about',[PageController::class, 'about']);
//Route::get('/articles/{id}',[PageController::class, 'articles']);
//NOMOR5
//Route::get('/',[HomeController::class, 'index']);
//Route::get('/about',[AboutController::class, 'about']);
//Route::get('/articles/{id}',[ArticleController::class, 'articles']);

//PRAKTIKUM 3
/*Route::get('/home', function () {
    echo "WELCOME TO WEBSITE EDUCASTUDIO <br>";
    echo "By : Thirsya Widya Sulaiman";
});

Route::get('/category', function () {
    echo "Berikut ini adalah product yang tersedia <br>";
    echo "- Marbel Edu Games<br>";
    echo "- Marbel and Friends Kids Games<br>";
    echo "- Riri Story Books<br>";
    echo "- Kolak Kids Songs<br>";
});

    Route::prefix('category') -> group(function(){
        Route::get("/marbel-edu-games", function(){
            echo "Berikut ini adalah category Marbel Edu Games";
        });
        Route::get("/marbel-and-friends-kids-games", function(){
            echo "Berikut ini adalah category Marbel and Friends Kids Games";
        });
        Route::get("/riri-story-books", function(){
            echo "Berikut ini adalah category Riri Story Books";
        });
        Route::get("/kolak-kids-song", function(){
            echo "Berikut ini adalah category Kolak Kids Songs";
        });
    });

Route::get('/news/{id}', function ($id) {
    return 'News : Berbagi untuk Warga Sekitar Terdampak Covid 19 ';
});

    Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
        });

Route::get('/program', function(){
    echo "Berikut ini program yang tersedia <br>";
    echo "- Program Karir <br>";
    echo "- Program Magang <br>";
    echo "- Program Kunjungan Industri <br>";
});

    Route::prefix('program') -> group(function(){
        Route::get("/karir" , function(){
            echo "Berikut ini informasi Program Karir";
        });
        Route::get("/magang" , function(){
            echo "Berikut ini informasi Program Magang";
        });
        Route::get("/kunjungan-industri" , function(){
            echo "Berikut ini informasi Program Kunjungan Industri";
        });
    });

Route::get("/about-us" , function(){
    echo "ABOUT US <br> Thirsya Widya Sulaiman <br> 2041720233 / TI-2G <br> @thirsya.widya <br>
    Kamal - Banyakan - Kediri";
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', function(){
//     return view('home', ['chefs'=>chef::index()]);
// });

//Route::get('/', [HomeController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/holee', function () {
    return 'hello word';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Faiq Ramzy Nabighah <br> 2241760024' ;
});



Route::get('/posts/{pertama}/comments/{kedua}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/artikel/{sepuluh}/id/{fff}', function ($artikelId, $idId) {
    return 'halaman Artike ke-'.$artikelId." ID ke-: ".$idId;
});

Route::get('/user/{faiq?}', function ($name='null') {
    return 'Nama saya  '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
}); 

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/artikel/{pertama}/{dua}', [PageController::class, 'artikel']);

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/artikel/{ketiga}/{empat}', ArticleController::class);

Route::resource('photos', PhotoController::class);
<?php

use App\Http\Controllers\ShopController;
use App\Models\Kategori;
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
    return view('home', [
        'image' => 'home-image.png',
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/shops', [ShopController::class, 'index']);
Route::get('shops/order/{shop:slug}', [ShopController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        'image' => 'about-image.png',
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/kategoris', function() {
    return view ('kategoris', [
        'title' => 'Kategori',
        'active' => 'kategoris',
        'kategoris' => Kategori::all()
    ]);
});

<?php

use App\Models\Order;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardShopController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\OrderController;

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
Route::get('shops/{shop:id}', [ShopController::class, 'show']);

Route::get('/shops/order/{shop:id}', [OrderController::class, 'create']);
Route::post('/shops/order/{id}', [OrderController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/success', function(){
    return view('order', [
        'title' => 'Success',
        'active' => 'shops',
        'image' => 'success-image.png'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'image' => 'about-image.png',
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/dashboard', function (){
    $userCount = User::count();
    $shopCount = Shop::count();
    $orderCount = Order::count();
    return view('dashboard.index', compact('userCount', 'shopCount', 'orderCount'));
})->middleware('admin');

Route::resource('/dashboard/shops', DashboardShopController::class)->middleware('admin');
Route::resource('/dashboard/orders', DashboardOrderController::class)->middleware('admin');

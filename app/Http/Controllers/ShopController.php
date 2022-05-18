<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $title = '';
        return view('shops', [
            "title" => "Daftar Produk" . $title,
            "active" => 'shop'
        ]);
    }

    public function show(Shop $shop) {
        return view('shop', [
            "title" => "Order",
            "active" => 'shops',
            "shop" => $shop
        ]);
    }
}

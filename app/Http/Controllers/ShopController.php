<?php

namespace App\Http\Controllers;

use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        return view('shops', [
            "title" => "Daftar Produk",
            "active" => 'shop',
            'shops' => Shop::with('kategori')->latest()->paginate(9)
        ]);
    }

    public function show(Shop $shop) {
        return view('shop', [
            "title" => "Produk",
            "active" => 'shops',
            "shop" => $shop,
        ]);
    }
}

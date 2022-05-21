<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('kategori')) {
            $kategori = Kategori::firstWhere('nama_kategori', request('kategori'));
            $title = ' ' . $kategori->nama_kategori;
        }
        return view('shops', [
            "title" => "Daftar Produk" . $title,
            "active" => 'shop',
            'shops' => Shop::with('kategori')->latest()->paginate(9)
        ]);
    }

    public function order(Shop $shop) {
        return view('order', [
            "title" => "Order",
            "active" => 'shops',
            "shop" => $shop
        ]);
    }
}

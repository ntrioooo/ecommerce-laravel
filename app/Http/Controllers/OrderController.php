<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Shop;

class OrderController extends Controller
{
    public function create($id)
    {
        return view('order.order',[
            'users' => User::where('id', auth()->user()->id)->get(),
            'shops' => Shop::where('id', $id)->get(),
            'title' => 'Order',
            'active' => 'shops',
        ]);
    }

    public function store(Request $request)
    {
        $createOrder = $request->validate([
            'user_id' => 'required',
            'nama_produk_id' => 'required',
            'size' => 'required',
            'alamat' => 'required',
        ]);

        Order::create($createOrder);

        return redirect('shops/order/{shop:id}')->with('success', 'Barang berhasil diorder!');
    }
}

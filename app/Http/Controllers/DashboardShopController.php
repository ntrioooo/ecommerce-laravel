<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Storage;

class DashboardShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.shops.index', [
            'shops' => Shop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.shops.create', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createData = $request->validate([
            'nama_produk' => 'required|max:255',
            'kategori_id' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:5000'
        ]);

        if($request->file('image')) {
            $createData['image'] = $request->file('image')->store('produk-images');
        }

        Shop::create($createData);

        return redirect('/dashboard/shops')->with('success', 'Data baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('dashboard.shops.show', [
            'shop' => $shop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('dashboard.shops.edit', [
            'shop' => $shop,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $editData = [
            'nama_produk' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:5000'
        ];

        $editDataValidate = $request->validate($editData);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $editDataValidate['image'] = $request->file('image')->store('produk-images');
        }

        Shop::where('id', $shop->id)
            ->update($editDataValidate);

        return redirect('/dashboard/shops')->with('success', 'Data barang berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        if($shop->image) {
            Storage::delete($shop->image);
        }

        Shop::destroy($shop->id);

        return redirect('/dashboard/shops')->with('success', 'Data barang berhasil dihapus');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Shop;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Trio Nugroho',
            'email' => 'asd@gmail.com',
            'password' => bcrypt('qwerty')
        ]);

        Kategori::create([
            'nama_kategori' => 'Top',
            'slug' => 'top'
        ]);

        Kategori::create([
            'nama_kategori' => 'Bottom',
            'slug' => 'bottom'
        ]);

        Shop::create([
            'nama_produk' => 'Baju',
            'slug' => 'baju',
            'harga' => 50000,
            'kategori_id' => 1
        ]);

        Shop::create([
            'nama_produk' => 'Celana',
            'slug' => 'celana',
            'harga' => 30000,
            'kategori_id' => 2
        ]);
    }
}

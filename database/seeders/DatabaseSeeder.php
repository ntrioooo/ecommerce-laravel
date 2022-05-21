<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Shop;
use App\Models\Order;

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
            'username' => 'ntrio',
            'password' => bcrypt('qwerty'),
            'is_admin' => 1
        ]);

        User::factory(2)->create();

        Kategori::create([
            'nama_kategori' => 'Top',
        ]);

        Kategori::create([
            'nama_kategori' => 'Bottom',
        ]);

        Shop::factory(10)->create();

        Order::factory(5)->create();
    }
}

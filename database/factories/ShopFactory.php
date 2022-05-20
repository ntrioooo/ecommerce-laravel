<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori_id' => mt_rand(1,2),
            'nama_produk' => $this->faker->word(),
            'harga' => $this->faker->numberBetween(15000, 18000),
        ];
    }
}

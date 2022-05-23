<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(2,3),
            'nama_produk_id' => mt_rand(1,10),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'alamat' => $this->faker->word()
        ];
    }
}

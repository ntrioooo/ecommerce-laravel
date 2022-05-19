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
            'name' => $this->faker->name(),
            'nama_produk' => $this->faker->word(),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL'])
        ];
    }
}

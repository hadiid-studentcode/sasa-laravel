<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode' => $this->faker->numberBetween(1, 100),
            'nama' => $this->faker->name,
            'idsatuan' => $this->faker->numberBetween(1, 10),
            'sawal' => $this->faker->numberBetween(1, 100),
            'hb' => $this->faker->numberBetween(1, 100),
            'hj' => $this->faker->numberBetween(1, 100),
        ];
    }
}

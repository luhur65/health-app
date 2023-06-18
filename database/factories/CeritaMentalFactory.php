<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CeritaMental>
 */
class CeritaMentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'userId' => \App\Models\User::factory(),
            'kodecerita' => $this->faker->unique()->word(),
            'judul' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'deskripsi' => $this->faker->paragraph(),
            'narasi' => $this->faker->paragraph(),
            'pesan' => $this->faker->paragraph(),
        ];
    }
}

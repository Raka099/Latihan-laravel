<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(), // Menghasilkan nama acak
            'nim' => $this->faker->unique()->numerify('########'), // Menghasilkan 8 digit angka unik
            'jurusan' => $this->faker->randomElement(['IF', 'SI', 'TI']), // Memilih acak dari pilihan
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

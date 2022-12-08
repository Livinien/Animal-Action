<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'owner' => $this->faker->name(),
            'firstname' => $this->faker->name(),
            'breed' => $this->faker->sentence(),
            'wound' => $this->faker->sentence(),
            'cure' => $this->faker->paragraph(6),
        ];
    }
}

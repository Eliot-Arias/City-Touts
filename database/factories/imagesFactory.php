<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\images>
 */
class imagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => $this->faker->text(50),
            'nombre' => $this->faker->city(),
            'descripcion' => $this->faker->text(450),
            'precio' => $this->faker->randomElement([150, 250, 350, 450])
        ];
    }
}

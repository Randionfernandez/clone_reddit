<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'p_body' => fake()->paragraph(),
            'p_fechalta' => $this->faker->dateTimeBetween(), // TODO: fecha posterior a la creación de la 'community'
        ];
    }
}

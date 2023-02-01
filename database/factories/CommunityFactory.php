<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Community>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cmm_body' => $this->faker->text(150),
            'cmm_fechalta' => $this->faker->dateTimeBetween(now()),
            'created_by' => 1,
        ];
    }
}

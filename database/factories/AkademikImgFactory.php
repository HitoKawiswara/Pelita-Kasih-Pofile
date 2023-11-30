<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AkademikImg>
 */
class AkademikImgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => 'Carousel1.png',
            'type' => fake()->randomElement(['tk', 'sd', 'smp', 'sma']),
        ];
    }
}

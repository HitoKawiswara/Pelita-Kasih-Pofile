<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StructureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'work_as' => fake()->randomElement(['guru', 'staff']),
            'job_desc' => fake()->text(10),
            'category' => fake()->randomElement(['tk', 'sd', 'smp', 'sma'])
        ];
    }
}

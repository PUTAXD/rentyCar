<?php

namespace Database\Factories;

use App\Models\Merk;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merk_id' => Merk::factory(),
            'licensePlate' => fake()->sentence(1,false),
            'type' =>fake()->sentence(1,false),
            'slug' => Str::slug(fake()->sentence()),
            'initialCondition' =>fake()->text(50),
            'body' => fake()->text(200),
            'price' => fake()->numberBetween(350000, 2000000),
        ];
    }
}

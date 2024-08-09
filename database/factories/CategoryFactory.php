<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $createdAt = fake()->dateTimeBetween('-1 years', 'now'); 
        $updatedAt = fake()->dateTimeBetween($createdAt, 'now'); 

        return [
            'name' => fake()->word(),          // Random word for name
            'is_publish' => fake()->boolean(), // Random boolean
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->jo,
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2),
            'category_id' => $this->faker->,
            'brand_id' => $this->faker->,
            'status' => $this->faker->,
            'cover' => $this->faker->imageUrl(640, 480, 'car'),
        ];
    }
}

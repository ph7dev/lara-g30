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
        return [
            'name' => $this->faker->unique()->jobTitle(),
            'description' => $this->faker->realText(),
            'status' => $this->faker->randomElement([true, false]),
            'cover' => $this->faker->imageUrl(640, 480, 'animal'),
            //'created_at' => $this->faker->dateTime()->format('Y-m-d H:i:s')
        ];
    }
}

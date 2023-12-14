<?php

namespace Database\Factories;

use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $brands = DB::table('brands')->pluck('id');
        $categories = DB::table('categories')->pluck('id');
        $name = $this->faker->catchPhrase();

        return [
            'name' => $name,
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 1, 9000),
            'category_id' => $this->faker->randomElement($categories),
            'brand_id' => $this->faker->randomElement($brands),
            'status' => $this->faker->randomElement(ProductStatus::getValues()),
            'cover' => $this->faker->imageUrl(640, 480, 'car'),
        ];
    }
}

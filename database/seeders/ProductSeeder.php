<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'brand_id' => BrandSeeder::FIAT_ID,
                'name' => 'Tipo',
                'description' => Lorem::text(),
                'status' => 'ENABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
            [
                'brand_id' => BrandSeeder::FIAT_ID,
                'name' => '500',
                'description' => Lorem::text(),
                'status' => 'ENABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
            [
                'brand_id' => BrandSeeder::FIAT_ID,
                'name' => 'Panda',
                'description' => Lorem::text(),
                'status' => 'DISABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],

            [
                'brand_id' => BrandSeeder::BMW_ID,
                'name' => '320',
                'description' => Lorem::text(),
                'status' => 'ENABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
            [
                'brand_id' => BrandSeeder::BMW_ID,
                'name' => '520',
                'description' => Lorem::text(),
                'status' => 'ENABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
            [
                'brand_id' => BrandSeeder::BMW_ID,
                'name' => 'Z8',
                'description' => Lorem::text(),
                'status' => 'DISABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],

            [
                'brand_id' => BrandSeeder::AF_ID,
                'name' => 'Stelvio',
                'description' => Lorem::text(),
                'status' => 'ENABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
            [
                'brand_id' => BrandSeeder::AF_ID,
                'name' => 'Giulia',
                'description' => Lorem::text(),
                'status' => 'ENABLED',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}

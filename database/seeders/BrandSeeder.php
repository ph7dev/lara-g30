<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public const FIAT_ID = 1;
    public const AF_ID = 2;
    public const BMW_ID = 3;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'id' => self::FIAT_ID,
                'name' => 'Fiat',
                'country' => 'Italy',
                'description' => 'Lorem ipsum',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
            [
                'id' => self::AF_ID,
                'name' => 'Alfa Romeo',
                'country' => 'Italy',
                'description' => 'Lorem ipsum',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
            [
                'id' => self::BMW_ID,
                'name' => 'Bmw',
                'country' => 'Germany',
                'description' => 'Lorem ipsum',
                'created_at' => fake()->dateTime,
                'updated_at' => fake()->dateTime,
            ],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert($brand);
        }
    }
}

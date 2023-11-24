<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Fiat',
                'country' => 'Italy',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Alfa Romeo',
                'country' => 'Italy',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Bmw',
                'country' => 'Germany',
                'description' => 'Lorem ipsum',
                'created_at' => time(),
                'updated_at' => time(),
            ],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert($brand);
        }
    }
}

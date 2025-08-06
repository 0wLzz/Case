<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Product::factory()->create([
            'name' => 'kPhone 15 Pro',
            'category_id' => 1,
            'color_id' => 2,
            'price' => 1499
        ]);

        Product::factory()->create([
            'name' => 'kPad Air M2',
            'category_id' => 2,
            'color_id' => 3,
            'price' => 799
        ]);

        Product::factory()->create([
            'name' => 'MakBook Air 15"',
            'category_id' => 3,
            'color_id' => 1,
            'price' => 1299
        ]);

        Product::factory()->create([
            'name' => 'Kelapa Watch Series 9',
            'category_id' => 4,
            'color_id' => 4,
            'price' => 499
        ]);

        Product::factory()->create([
            'name' => 'KelPods Pro (2nd Gen)',
            'category_id' => 5,
            'color_id' => 1,
            'price' => 249
        ]);
    }
}

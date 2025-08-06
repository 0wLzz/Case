<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Testimony;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Smartphone'],
            ['name' => 'Tablet'],
            ['name' => 'Laptop'],
            ['name' => 'Wearable'],
            ['name' => 'Accessories'],
        ]);

        DB::table('colors')->insert([
            ['name' => 'Silver'],
            ['name' => 'Space Gray'],
            ['name' => 'Midnight'],
            ['name' => 'Starlight'],
            ['name' => 'Blue'],
        ]);

        User::factory()->create([
            'name' => 'Kelapa User',
            'email' => 'kelapa@example.com',
        ]);

        $this->call([
            ProductSeeder::class
        ]);

        Testimony::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Tecnología'],
            ['name' => 'Celulares'],
            ['name' => 'Computadores'],
            ['name' => 'Audio'],
            ['name' => 'Gaming'],
            ['name' => 'Electrodomésticos'],
            ['name' => 'Moda'],
            ['name' => 'Hogar'],
            ['name' => 'Deportes'],
            ['name' => 'Libros'],
        ];

        foreach ($categories as $category) {
            DB::table('category')->insert([
                'name' => $category['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple'],
            ['name' => 'Samsung'],
            ['name' => 'Sony'],
            ['name' => 'LG'],
            ['name' => 'Huawei'],
            ['name' => 'Xiaomi'],
            ['name' => 'HP'],
            ['name' => 'Dell'],
            ['name' => 'Lenovo'],
            ['name' => 'Asus'],
            ['name' => 'Nintendo'],
            ['name' => 'PlayStation'],
            ['name' => 'Xbox'],
            ['name' => 'Razer'],
            ['name' => 'Bose'],
            ['name' => 'JBL'],
            ['name' => 'Nike'],
            ['name' => 'Adidas'],
            ['name' => 'Zara'],
            ['name' => 'Philips'],
        ];

        foreach ($brands as $brand) {
            DB::table('brand')->insert([
                'name' => $brand['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
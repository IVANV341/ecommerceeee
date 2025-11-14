<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 15 Pro Max',
                'description' => 'El iPhone más avanzado con chip A17 Pro, cámara de 48MP y pantalla Super Retina XDR de 6.7 pulgadas.',
                'price' => 5299000,
                'category_id' => 2, // Celulares
                'brand_id' => 1,    // Apple
            ],
            [
                'name' => 'Samsung Galaxy S24 Ultra',
                'description' => 'Smartphone premium con S Pen integrado, cámara de 200MP con zoom óptico 10x.',
                'price' => 4899000,
                'category_id' => 2, // Celulares
                'brand_id' => 2,    // Samsung
            ],
            [
                'name' => 'MacBook Pro M3 14"',
                'description' => 'Laptop profesional con chip M3, 16GB RAM, 512GB SSD, pantalla Liquid Retina XDR.',
                'price' => 8999000,
                'category_id' => 3, // Computadores
                'brand_id' => 1,    // Apple
            ],
            [
                'name' => 'Dell XPS 13 Plus',
                'description' => 'Ultrabook premium con Intel Core i7 13va gen, 16GB LPDDR5, SSD 512GB.',
                'price' => 6799000,
                'category_id' => 3, // Computadores
                'brand_id' => 8,    // Dell
            ],
            [
                'name' => 'PlayStation 5 Slim',
                'description' => 'Consola de nueva generación con SSD ultra rápido, gráficos 4K/120fps.',
                'price' => 2599000,
                'category_id' => 5, // Gaming
                'brand_id' => 12,   // PlayStation
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'description' => 'Consola híbrida con pantalla OLED de 7", dock con puerto LAN, 64GB almacenamiento.',
                'price' => 1899000,
                'category_id' => 5, // Gaming
                'brand_id' => 11,   // Nintendo
            ],
            [
                'name' => 'AirPods Pro 2',
                'description' => 'Auriculares inalámbricos con cancelación de ruido adaptativa, audio espacial personalizado.',
                'price' => 1099000,
                'category_id' => 4, // Audio
                'brand_id' => 1,    // Apple
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'description' => 'Auriculares over-ear con la mejor cancelación de ruido del mundo, 30 horas de batería.',
                'price' => 1399000,
                'category_id' => 4, // Audio
                'brand_id' => 3,    // Sony
            ],
            [
                'name' => 'Samsung Neo QLED 65"',
                'description' => 'Smart TV 4K con tecnología Neo QLED, procesador Neural Quantum 4K, HDR10+.',
                'price' => 6999000,
                'category_id' => 6, // Electrodomésticos
                'brand_id' => 2,    // Samsung
            ],
            [
                'name' => 'LG InstaView Refrigerador',
                'description' => 'Nevera Side by Side 601L con tecnología InstaView, compresor Inverter Linear.',
                'price' => 4599000,
                'category_id' => 6, // Electrodomésticos
                'brand_id' => 4,    // LG
            ],
            [
                'name' => 'Nike Air Max 270',
                'description' => 'Zapatillas deportivas con la unidad Air más grande de Nike, upper mesh transpirable.',
                'price' => 589000,
                'category_id' => 7, // Moda
                'brand_id' => 17,   // Nike
            ],
            [
                'name' => 'Adidas Ultraboost 22',
                'description' => 'Tenis running con tecnología BOOST, upper Primeknit+ y outsola Continental Rubber.',
                'price' => 699000,
                'category_id' => 7, // Moda
                'brand_id' => 18,   // Adidas
            ],
            [
                'name' => 'Xiaomi 14 Pro',
                'description' => 'Teléfono flagship con cámara Leica, procesador Snapdragon 8 Gen 3, carga rápida 120W.',
                'price' => 2899000,
                'category_id' => 2, // Celulares
                'brand_id' => 6,    // Xiaomi
            ],
            [
                'name' => 'HP Pavilion Gaming',
                'description' => 'Laptop gamer con AMD Ryzen 7, NVIDIA RTX 4060, 16GB RAM, 512GB SSD.',
                'price' => 4299000,
                'category_id' => 3, // Computadores
                'brand_id' => 7,    // HP
            ],
            [
                'name' => 'JBL Charge 5',
                'description' => 'Altavoz bluetooth portátil con sonido JBL Pro, 20 horas de reproducción.',
                'price' => 599000,
                'category_id' => 4, // Audio
                'brand_id' => 16,   // JBL
            ],
            [
                'name' => 'Razer DeathAdder V3',
                'description' => 'Mouse gamer profesional con sensor Focus Pro 30K, switches ópticas gen-3.',
                'price' => 399000,
                'category_id' => 5, // Gaming
                'brand_id' => 14,   // Razer
            ],
            [
                'name' => 'Philips Hue Starter Kit',
                'description' => 'Kit de iluminación inteligente con 3 bombillas color, puente Hue y control por app.',
                'price' => 899000,
                'category_id' => 8, // Hogar
                'brand_id' => 20,   // Philips
            ],
            [
                'name' => 'Xbox Series X',
                'description' => 'La consola Xbox más potente con 4K nativo, 120fps, Quick Resume, 1TB SSD.',
                'price' => 2699000,
                'category_id' => 5, // Gaming
                'brand_id' => 13,   // Xbox
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon',
                'description' => 'Laptop empresarial ultraliviana con Intel Core i7, 16GB RAM, 1TB SSD.',
                'price' => 7599000,
                'category_id' => 3, // Computadores
                'brand_id' => 9,    // Lenovo
            ],
            [
                'name' => 'Bose QuietComfort Ultra',
                'description' => 'Auriculares premium con audio espacial inmersivo, cancelación de ruido clase mundial.',
                'price' => 1799000,
                'category_id' => 4, // Audio
                'brand_id' => 15,   // Bose
            ],
            [
                'name' => 'Huawei P60 Pro',
                'description' => 'Smartphone con sistema de cámaras Ultra Vision, procesador Kirin 9000s.',
                'price' => 3299000,
                'category_id' => 2, // Celulares
                'brand_id' => 5,    // Huawei
            ],
            [
                'name' => 'Asus ROG Strix G15',
                'description' => 'Laptop gaming con AMD Ryzen 9, RTX 4070, 16GB RAM, pantalla 165Hz.',
                'price' => 5899000,
                'category_id' => 3, // Computadores
                'brand_id' => 10,   // Asus
            ],
            [
                'name' => 'Whirlpool Lavadora 18kg',
                'description' => 'Lavadora carga superior con tecnología 6th Sense, 14 programas de lavado.',
                'price' => 1999000,
                'category_id' => 6, // Electrodomésticos
                'brand_id' => 20,   // Genérico (usaremos Philips por ahora)
            ],
            [
                'name' => 'Zara Chaqueta Cuero',
                'description' => 'Chaqueta de cuero sintético, corte slim fit, disponible en negro y marrón.',
                'price' => 199000,
                'category_id' => 7, // Moda
                'brand_id' => 19,   // Zara
            ],
            [
                'name' => 'Sofá Seccional Gris',
                'description' => 'Sofá modular en forma de L para 6 personas, tapizado en tela microfibra.',
                'price' => 2199000,
                'category_id' => 8, // Hogar
                'brand_id' => 20,   // Genérico (Philips)
            ]
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'category_id' => $product['category_id'],
                'brand_id' => $product['brand_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
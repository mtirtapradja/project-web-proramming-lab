<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Xiaomi Pad 5',
            'price' => 4999999,
            'category_id' => 4,
            'description' => 'Best Value Flagship Killer Tablet',
            'image_url' => '0'
        ]);
        Product::create([
            'name' => 'Samsung S7',
            'price' => 7999999,
            'category_id' => 4,
            'description' => 'Flagship Premium Tablet',
            'image_url' => '0'
        ]);
    }
}

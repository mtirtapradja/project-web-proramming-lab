<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Television', 'Laptop', 'Smartphone', 'Tablet'];
        $size = count($categories);
        for ($i = 0; $i < $size; $i++){
            Category::create([
               'name' => $categories[$i] 
            ]);
        }
    }
}

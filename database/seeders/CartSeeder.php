<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
            'user_id' => 2,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 4999999
        ]);
        Cart::create([
            'user_id' => 2,
            'product_id' => 2,
            'quantity' => 2,
            'price' => 7999999
        ]);

        Cart::create([
            'user_id' => 3,
            'product_id' => 1,
            'quantity' => 3,
            'price' => 4999999
        ]);
    }
}

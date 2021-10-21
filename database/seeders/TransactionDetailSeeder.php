<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransactionDetail;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionDetail::create([
            'id' => 1,
            'transaction_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 1000
        ]);
        TransactionDetail::create([
            'id' => 2,
            'transaction_id' => 1,
            'product_id' => 2,
            'quantity' => 2,
            'price' => 2000
        ]);

        TransactionDetail::create([
            'id' => 3,
            'transaction_id' => 2,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 1000
        ]);
        TransactionDetail::create([
            'id' => 4,
            'transaction_id' => 2,
            'product_id' => 2,
            'quantity' => 2,
            'price' => 2000
        ]);

        TransactionDetail::create([
            'id' => 5,
            'transaction_id' => 3,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 1000
        ]);
    }
}

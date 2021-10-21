<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'id' => 1,
            'user_id' => 2
        ]);
        Transaction::create([
            'id' => 2,
            'user_id' => 2
        ]);

        Transaction::create([
            'id' => 3,
            'user_id' => 3
        ]);
    }
}

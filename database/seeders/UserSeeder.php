<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marcellino',
            'email' => 'marcellino@binus.ac.id',
            'role_id' => 1,
            'gender_id' => 1,
            'address' => 'Alam Sutra',
            'password' => 123456
        ]);
        User::create([
            'name' => 'Steven Santoso Suntiarko',
            'email' => 'steven.suntiarko@binus.ac.id',
            'role_id' => 2,
            'gender_id' => 1,
            'address' => 'Jakarta',
            'password' => 123456
        ]);
    }
}

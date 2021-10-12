<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = ['Male', 'Female'];
        $size = count($genders);
        for ($i = 0; $i < $size; $i++){
            Gender::create([
               'name' => $genders[$i] 
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'User'];
        $size = count($roles);
        for ($i = 0; $i < $size; $i++){
            Role::create([
               'name' => $roles[$i] 
            ]);
        }
    }
}

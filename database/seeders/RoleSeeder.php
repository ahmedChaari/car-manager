<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'          =>   'admin', //administrateur role= 1
            ]);
        Role::create([
            'name'          =>   'seller',  // vendeur role= 2
            ]);
        Role::create([
            'name'          =>   'buyer', // acheteur role= 3
            ]);
    }
}

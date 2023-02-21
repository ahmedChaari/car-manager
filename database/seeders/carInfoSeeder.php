<?php

namespace Database\Seeders;

use App\Models\CarInfo;
use Illuminate\Database\Seeder;

class carInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarInfo::factory(20)->create();
    }
}

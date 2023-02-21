<?php

namespace Database\Seeders;

use App\Models\PayementMethod;
use Illuminate\Database\Seeder;

class PayementMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PayementMethod::create([
            'name'          =>   'Cache',
            ]);
        PayementMethod::create([
            'name'          =>   'Paypal',
            ]);
    }
}

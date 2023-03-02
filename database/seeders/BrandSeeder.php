<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['brand'          =>   'Acura']);
        Brand::create(['brand'          =>   'Alfa Romeo']);
        Brand::create(['brand'          =>   'BMW']);
        Brand::create(['brand'          =>   'Buick']);
        Brand::create([
            'brand'          =>   'Cadillac',
        ]);
        Brand::create([
            'brand'          =>   'Chevrolet',
            ]);
        Brand::create([
            'brand'          =>   'Chrysler',
            ]);
        Brand::create([
            'brand'          =>   'Dodge',
            ]);
        Brand::create([
            'brand'          =>   'Ford',
            ]);
        Brand::create([
            'brand'          =>   'Genesis',
            ]);
        Brand::create([
            'brand'          =>   'GMC',
            ]);
        Brand::create([
            'brand'          =>   'Honda',
            ]);
        Brand::create([
            'brand'          =>   'Hyundai',
            ]);
        Brand::create([
            'brand'          =>   'Infiniti',
            ]);
        Brand::create([
            'brand'          =>   'Jaguar',
            ]);
        Brand::create([
            'brand'          =>   'Jeep',
            ]);
        Brand::create([
            'brand'          =>   'Kia',
            ]);
        Brand::create([
            'brand'          =>   'Land Rover',
            ]);
        Brand::create([
            'brand'          =>   'Lexus',
            ]);
        Brand::create([
            'brand'          =>   'Lincoln',
            ]);
        Brand::create([
            'brand'          =>   'Maserati',
            ]);
        Brand::create([
            'brand'          =>   'Mazda',
            ]);
        Brand::create([
            'brand'          =>   'Mercedes-Benz',
            ]);
        Brand::create([
            'brand'          =>   'Mini',
            ]);
        Brand::create([
            'brand'          =>   'Mitsubishi',
            ]);
        Brand::create([
            'brand'          =>   'Nissan',
            ]);
        Brand::create([
            'brand'          =>   'Polestar',
            ]);
        Brand::create([
            'brand'          =>   'Porsche',
            ]);
        Brand::create([
            'brand'          =>   'Ram',
            ]);
        Brand::create([
            'brand'          =>   'Rivian',
            ]);
        Brand::create([
            'brand'          =>   'Subaru',
        ]);
        Brand::create([
            'brand'          =>   'Tesla',
            ]);
        Brand::create([
            'brand'          =>   'Toyota',
            ]);
        Brand::create([
            'brand'          =>   'Volkswagen',
            ]);
        Brand::create([
            'brand'          =>   'Volvo',
            ]);
                                                       
    }
}

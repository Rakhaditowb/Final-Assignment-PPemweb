<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Product::create([
          'title' => 'Mobile Legend',
          'nominal' => '300 Diamond',
          'price' => 20000
      ]);
      
      Product::create([
        'title' => 'Mobile Legend',
        'nominal' => '1500 Diamond',
        'price' => 90000
    ]);

    Product::create([
        'title' => 'Valorant',
        'nominal' => '1000 Vp',
        'price' => 100000
    ]);

    Product::create([
        'title' => 'Valorant',
        'nominal' => '5000 Vp',
        'price' => 480000
    ]);

    Product::create([
        'title' => 'Honkai Star Rail',
        'nominal' => '500 Stellar Jade',
        'price' => 35000
    ]);
    }
}

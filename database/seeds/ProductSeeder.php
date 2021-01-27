<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    
           /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product::factory()->times(rand(1000,2000))->create();
        factory(App\Product::class, 200)->create();

        
    }
}

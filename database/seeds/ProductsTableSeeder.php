<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory\Factory::create();

        for($i=0 ; $i <100 ; $i++){
           Product::create([
              'title' => $faker->sentence(15),
              'sulg' => $faker->slug,
              'subtitle' => $faker->sentence(10),
              'description' => $faker->text,
              'price' => $faker ->numberBetween(15, 300)*100
           ]);
        }
    }
}

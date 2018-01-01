<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $f = Factory::create();
        foreach (range(1, 50) as $i) {
            $product = new Product();
            $product->image_id = $i;
            $product->product = $f->text(20);
            $product->description = $f->text;
            $product->details = $f->text;
            $product->price = mt_rand(1000, 9000) / 100;
            $product->save();
        }
    }
}

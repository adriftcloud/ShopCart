<?php

use App\Models\Image;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();
        $f = Factory::create();

        foreach (range(1, 50) as $i) {
            $image = new Image();
            $image->file = $f->image('public/images/', 800, 600, null, false);
            $image->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Genre;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'Film'
        ]);

        $category2 = Category::create([
            'name' => 'Muzika'
        ]);

        $category3 = Category::create([
            'name' => 'Igre'
        ]);

        $category4 = Category::create([
            'name' => 'Knjige'
        ]);
    }
}

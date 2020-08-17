<?php

use Illuminate\Database\Seeder;

use App\Genre;
use App\Category;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre1 = Genre::create(['name' => 'Akcija']);
        $genre2 = Genre::create(['name' => 'Komedija']);
        $genre3 = Genre::create(['name' => 'Drama']);
        $genre4 = Genre::create(['name' => 'Knjige za decu']);
        $genre5 = Genre::create(['name' => 'Rock']);
        $genre6 = Genre::create(['name' => 'Opera']);
        $genre7 = Genre::create(['name' => 'Clasica']);
        $genre8= Genre::create(['name' => 'jazz']);
        $genre9 = Genre::create(['name' => 'Blues']);

        $category = Category::find(4);
        $category->genres()->attach($genre1);
        
        $category = Category::find(4);
        $category->genres()->attach($genre3);

        $category = Category::find(4);
        $category->genres()->attach($genre2);

        $category = Category::find(4);
        $category->genres()->attach($genre4);
        
        $category = Category::find(1);
        $category->genres()->attach($genre1);

        $category = Category::find(1);
        $category->genres()->attach($genre2);

        $category = Category::find(1);
        $category->genres()->attach($genre3);

        $category = Category::find(3);
        $category->genres()->attach($genre1);

        $category = Category::find(2);
        $category->genres()->attach($genre5);

        $category = Category::find(2);
        $category->genres()->attach($genre8);

        $category = Category::find(2);
        $category->genres()->attach($genre9);

        $category = Category::find(2);
        $category->genres()->attach($genre6);

        $category = Category::find(2);
        $category->genres()->attach($genre6);
    }
}

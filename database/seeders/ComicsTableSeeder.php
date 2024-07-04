<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newComic = new Comic();
        $newComic->title = "SpiderMan";
        $newComic->author = "Stan Lee";
        $newComic->description = "Peter Parker è il tuo amichevole spiderman di quartiere";
        $newComic->publication_date = '1970-04-04';
        $newComic->price = 10.50;
        $newComic->publisher = "Marvel Comics";
        $newComic->save();

        for ($i=0;$i < 6;$i++) {

            $comic = new Comic();
            $comic->title = $faker->sentence(3);
            $comic->author = $faker->name();
            $comic->description = $faker->paragraph();
            $comic->publication_date = $faker->date();
            $comic->price = $faker->randomFloat(2, 1, 100);
            $comic->publisher = $faker->company();
            $comic->save();
        
        }
    }

    
}

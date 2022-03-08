<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create("id_ID");
        foreach(range(1,50) as $item) {
            Artikel::create([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'body' => $faker->sentence($nbWords = 30, $variableNbWords = true),
            ]);
        }
    }
}

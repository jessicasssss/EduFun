<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Writer;
use App\Models\Article;


class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i<2; $i++){
            $writer = Writer::create([
                'name' => $faker->name(),
                'description' => $faker->sentence(3),
                'image'=> 'icon'.rand(1,5).'.png',
            ]);

            $articleCount = rand(1,2);

            for($j=0; $j<$articleCount; $j++){
                Article::create([
                    'title' => ucfirst($faker->words(3,true)),
                    'content' => $faker->paragraph(5),
                    'category' => $faker->randomElement(['Data Science', 'Network Security']),
                    'image' => 'placeholder'. rand(1,5).'.jpg',
                    'writer_id' => $writer->id,
                ]);
            }
        }

    }
}

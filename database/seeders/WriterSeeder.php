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

        $dataScienceTopics = [
            'Machine Learning', 
            'Deep Learning', 
            'Natural Language Processing'
        ];
        
        $networkSecurityTopics = [
            'Software Security', 
            'Network Administration', 
            'Popular Network Technology'
        ];

        for($i = 0; $i<2; $i++){
            $writer = Writer::create([
                'name' => $faker->name(),
                'description' => $faker->sentence(3),
                'image'=> 'icon'.rand(1,5).'.png',
            ]);

            $articleCount = rand(1,2); 

            for($j=0; $j<$articleCount; $j++){
                $category = $faker->randomElement(['Data Science', 'Network Security']);
                $title = '';

                if($category === 'Data Science'){
                    $title = $faker->randomElement($dataScienceTopics);
                }
                else{
                    $title = $faker->randomElement($networkSecurityTopics);
                }

                Article::create([
                    'title' => $title,
                    'content' => $faker->paragraph(5),
                    'category' => $category,
                    'image' => 'placeholder'. rand(1,5).'.jpg',
                    'writer_id' => $writer->id,
                ]);
            }
        }

    }
}

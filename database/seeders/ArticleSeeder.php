<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for ($i=0; $i < 6; $i++) { 
            $title=$faker->sentence(6);
            DB::table('articles')->insert([
                'category_id'=>rand(1,3),
                'title'=>$title,
                'image'=>$faker->imageUrl(774, 581, 'random', true),
                'content'=>$faker->text,
                'slug'=>str_slug($title),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}

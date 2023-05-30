<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages=['Misyon','Vizyon'];
        $count=0;
        foreach($pages as $page){
            $count ++;
            DB::table('pages')->insert([
                'title' => $page,
                'content' => 'lorem ipsum dolor sit amet',

                'image' => 'https://www.powerreklam.com/wp-content/themes/tema2/lib/timthumb.php?src=https://www.powerreklam.com/wp-content/uploads/2019/04/paslanmaztabela-powerreklam.jpg&w=736&h=414',

                'slug' => str_slug($page),
                'order' => $count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}

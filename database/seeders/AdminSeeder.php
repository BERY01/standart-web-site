<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name'=>'Rıdvan Ayaz',
            'email'=>'ridvanayaz0011@gmail.com',
            'password'=>bcrypt(12091209) 
        ]);
    }
}

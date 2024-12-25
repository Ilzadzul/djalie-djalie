<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            ['photo' => 'makeup1.jpg', 'category' => 'makeup'],
            ['photo' => 'makeup2.jpg', 'category' => 'makeup'],
            ['photo' => 'makeup3.jpg', 'category' => 'makeup'],
            ['photo' => 'makeup4.jpg', 'category' => 'makeup']
        ]);
    }
}

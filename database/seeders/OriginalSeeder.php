<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OriginalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Originals')->insert([
            ['text'=>'Blue', 'language_id'=>1],
            ['text'=>'Green', 'language_id'=>1],
        ]);
    }
}

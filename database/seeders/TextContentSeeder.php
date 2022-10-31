<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('text_contents')->insert([
            ['originals_id'=>1, 'translation_id'=>1, 'types_id'=>1,],
            ['originals_id'=>2, 'translation_id'=>2, 'types_id'=>1,],
        ]);
    }
}

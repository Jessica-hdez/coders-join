<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert(['experience' => 'Sin experiencia']);

        DB::table('experiences')->insert(['experience' => 'Menos de 1 año']);

        DB::table('experiences')->insert(['experience' => 'Entre 1 año y 3 años']);

        DB::table('experiences')->insert(['experience' => 'Entre 3 años y 4 años']);

        DB::table('experiences')->insert(['experience' => '4 años o más']);
    }
}

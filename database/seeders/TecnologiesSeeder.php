<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tecnologies')->insert(['name' => 'Angular']);

        DB::table('tecnologies')->insert(['name' => 'CSS']);

        DB::table('tecnologies')->insert(['name' => 'Docker']);

        DB::table('tecnologies')->insert(['name' => 'HTML']);

        DB::table('tecnologies')->insert(['name' => 'Java']);

        DB::table('tecnologies')->insert(['name' => 'JavaScript']);

        DB::table('tecnologies')->insert(['name' => 'Laravel']);

        DB::table('tecnologies')->insert(['name' => 'MongoDB']);

        DB::table('tecnologies')->insert(['name' => 'NodeJS']);

        DB::table('tecnologies')->insert(['name' => 'PHP']);

        DB::table('tecnologies')->insert(['name' => 'Python']);

        DB::table('tecnologies')->insert(['name' => 'React']);

        DB::table('tecnologies')->insert(['name' => 'Ruby']);

        DB::table('tecnologies')->insert(['name' => 'SQL']);

        DB::table('tecnologies')->insert(['name' => 'TypeScript']);

        DB::table('tecnologies')->insert(['name' => 'Vue']);

        DB::table('tecnologies')->insert(['name' => '.NET']);
    }
}

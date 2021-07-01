<?php

namespace Database\Seeders;

use App\Models\Skill;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert(['name' => 'Comunicación']);

        DB::table('skills')->insert(['name' => 'Autogestión']);

        DB::table('skills')->insert(['name' => 'Autodidacta']);

        DB::table('skills')->insert(['name' => 'Resolución de problemas']);

        DB::table('skills')->insert(['name' => 'Trabajo en equipo']);
    }
}

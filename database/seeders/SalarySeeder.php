<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salaries')->insert(['salary' => 'Menos de $1.000.000']);

        DB::table('salaries')->insert(['salary' => 'Entre $1.000.000 - $2.000.000']);

        DB::table('salaries')->insert(['salary' => 'Entre $2.000.000 - $3.000.000']);

        DB::table('salaries')->insert(['salary' => 'Entre $3.000.000 - $4.000.000']);

        DB::table('salaries')->insert(['salary' => 'Más de $4.000.000']);
    }
}

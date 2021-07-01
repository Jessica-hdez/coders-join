<?php

namespace Database\Seeders;

use App\Models\Languaje;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languajes')->insert(['languaje' => ' Inglés']);

        DB::table('languajes')->insert(['languaje' => 'Español']);

        DB::table('languajes')->insert(['languaje' => 'Francés']);

        DB::table('languajes')->insert(['languaje' => 'Mandarín']);

        DB::table('languajes')->insert(['languaje' => 'Portugués']);
    }
}

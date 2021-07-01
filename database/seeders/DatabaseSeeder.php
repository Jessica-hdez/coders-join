<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CountriesSeeder::class,
            TecnologiesSeeder::class,
            LanguajesSeeder::class,
            LangLevelSeeder::class,
            SkillsSeeder::class,
            CurrenciesSeeder::class,
            SalarySeeder::class,
            ExperiencesSeeder::class
        ]);
    }
}

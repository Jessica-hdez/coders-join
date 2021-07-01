<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jessica Hernández',
            'email' => 'jess@gmail.com',
            'password' => bcrypt('jess1234')
        ])->assignRole('Admin');
    }
}
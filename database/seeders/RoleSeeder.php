<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin= Role::create(['name'=> 'Admin']);        
        $roleRecruiter= Role::create(['name'=> 'Recruiter']);
        $roleDeveloper= Role::create(['name'=> 'Developers']);

        Permission::create(['name' => 'recruiterpermi'])->syncRoles([$roleRecruiter]);
        Permission::create(['name' => 'developerpermi'])->syncRoles([$roleDeveloper]);
        Permission::create(['name' => 'adminpermi'])->syncRoles([$roleAdmin]);
       
    }
}

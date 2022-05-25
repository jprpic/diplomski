<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Employee';
        $role->save();

        $role = new Role();
        $role->name = 'Employer';
        $role->save();

        $role = new Role();
        $role->name = 'Admin';
        $role->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->save();

        $role_buyer = new Role();
        $role_buyer->name = 'Buyer';
        $role_buyer->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->save();
    }
}

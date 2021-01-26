<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_buyer = Role::where('name', 'Buyer')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('test1234');
        $user->save();
        $user->roles()->attach($role_user);

        $buyer = new User();
        $buyer->name = 'Test';
        $buyer->email = 'test@mail.com';
        $buyer->password = bcrypt('test1234');
        $buyer->save();
        $buyer->roles()->attach($role_buyer);

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@mail.com';
        $admin->password = bcrypt('test1234');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}

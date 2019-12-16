<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'usuario';
        $user->email = 'usuario@gmail.com';
        $user->password = bcrypt('usuario1234');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin1234');
        $user->save();
        $user->roles()->attach($role_admin);
     }
}

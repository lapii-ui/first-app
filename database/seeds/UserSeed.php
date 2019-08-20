<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Root',
            'email' => 'root@admin.com',
            'password' => bcrypt('1234qwer'),
            'role' => '0'
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'super-admin@admin.com',
            'password' => bcrypt('1234qwer'),
            'role' => '1'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234qwer'),
            'role' => '2'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('1234qwer'),
            'role' => '3'
        ]);
    }
}

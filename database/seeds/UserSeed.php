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
        $super = User::create([
            'name' => 'Super Admin',
            'email' => 'super-admin@admin.com',
            'password' => bcrypt('1234qwer')
        ]);
        $super->assign('super-admin');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234qwer')
        ]);
        $admin->assign('administrator');

        $edit = User::create([
            'name' => 'Editor',
            'email' => 'edit@user.com',
            'password' => bcrypt('1234qwer')
        ]);
        $edit->assign('edit');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('1234qwer')
        ]);
        $user->assign('user');
    }
}

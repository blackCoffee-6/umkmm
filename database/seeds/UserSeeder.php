<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name'      => 'admin',
            'phone'     => '123456789',
            'address'   => 'admins',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admins'),
            'role' => 'admin'
        ]);

        User::create([
            'name'      => 'user',
            'phone'     => '987654321',
            'address'   => 'users',
            'email'     => 'user@user.com',
            'password'  => Hash::make('users'),
            'role' => 'user'
        ]);
    }
}

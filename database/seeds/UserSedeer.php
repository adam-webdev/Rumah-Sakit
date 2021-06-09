<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'farhan',
            'email' => 'farhan@gmail.com',
            'password' => Hash::make('password'),
            'alamat' => 'Bekasi,Jawa Barat',
            'telephone' => '082124373887'
        ]);
        $admin->assignRole('manager');

        $user = User::create([
            'name' => 'santa',
            'email' => 'santa@gmail.com',
            'password' => Hash::make('password'),
            'alamat' => 'Bekasi,Jawa Barat',
            'telephone' => '082124373887'
        ]);
        $user->assignRole('admin');
    }
}

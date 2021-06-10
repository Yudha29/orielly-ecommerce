<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 1,
                'name' => 'Admin'
            ],
            [
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 0,
                'name' => 'User'
            ]
        ];

        foreach ($users as $u) {
            User::create($u);
        }
    }
}

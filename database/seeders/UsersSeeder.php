<?php

namespace Database\Seeders;

use App\Models\Targeta;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
            [
                'name' => 'user2',
                'email' => 'user2@user.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
            [
                'name' => 'user3',
                'email' => 'user3@user.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
            [
                'name' => 'user4',
                'email' => 'user4@user.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ]
        ]);
    }
}

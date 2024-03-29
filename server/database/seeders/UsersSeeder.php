<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John',
                'surname' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password'),
                'role' => 'doctor',
            ],
            [
                'name' => 'Micheal',
                'surname' => 'Angelo',
                'email' => 'Micheal.Angelo@example.com',
                'password' => bcrypt('password'),
                'role' => 'doctor',
            ],
            [
                'name' => 'John',
                'surname' => 'Wiha',
                'email' => 'john.Wiha@example.com',
                'password' => bcrypt('password'),
                'role' => 'doctor',
            ],
            [
                'name' => 'Albert',
                'surname' => 'Doe',
                'email' => 'Albert.doe@example.com',
                'password' => bcrypt('password'),
                'role' => 'doctor',
            ],
            [
                'name' => 'Hassan',
                'surname' => 'Bicoclo',
                'email' => 'Hassan.Bicoclo@example.com',
                'password' => bcrypt('password'),
                'role' => 'doctor',
            ],
            [
                'name' => 'Hicha',
                'surname' => 'Jnhio',
                'email' => 'Hicha.Jnhio@example.com',
                'password' => bcrypt('password'),
                'role' => 'doctor',
            ],
    ];
        DB::table('users')->insert($users);

    }
}

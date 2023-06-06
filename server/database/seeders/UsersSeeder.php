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
                'name' => 'John',
                'surname' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password'),
                'role' => 'doctor',
        ];
        DB::table('users')->insert($users);

    }
}

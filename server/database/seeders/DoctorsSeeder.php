<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use App\Models\Doctor;
use App\Models\User;



class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                'name' => 'John',
                'surname' => 'Doe',
                'phone' => '0771313350',
                'email' => 'john.doe@example.com',
                'specialite' => 'Generaliste',
                'addressCabinet' => 'Casa Oulfa test',
            ],
            [
                'name' => 'Micheal',
                'surname' => 'Angelo',
                'email' => 'Micheal.Angelo@example.com',
                'phone' => '0771313350',
                'specialite' => 'Radiologue',
                'addressCabinet' => 'Casa sidi marouf',
            ],
            [
                'name' => 'John',
                'surname' => 'Wiha',
                'email' => 'john.Wiha@example.com',
                'phone' => '0771313350',
                'specialite' => 'Generaliste',
                'addressCabinet' => 'Sale Lkarya',
            ],
            [
                'name' => 'Albert',
                'surname' => 'Doe',
                'email' => 'Albert.doe@example.com',
                'phone' => '0771313350',
                'specialite' => 'Dentiste',
                'addressCabinet' => 'Sale Machro3',
            ],
            [
                'name' => 'Hassan',
                'surname' => 'Bicoclo',
                'email' => 'Hassan.Bicoclo@example.com',
                'phone' => '0771313350',
                'specialite' => 'Psychologue',
                'addressCabinet' => 'Rabat test',
            ],
            [
                'name' => 'Hicha',
                'surname' => 'Jnhio',
                'email' => 'Hicha.Jnhio@example.com',
                'phone' => '0771313350',
                'specialite' => 'Dermatologue',
                'addressCabinet' => 'Errahma machro3',
            ],
    ];
        DB::table('doctors')->insert($doctors);

    }
}

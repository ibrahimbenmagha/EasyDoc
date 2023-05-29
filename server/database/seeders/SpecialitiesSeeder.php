<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Speciality;

class SpecialitiesSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        $specialities = [
            ['name_specialite' => 'Generaliste'],
            ['name_specialite' => 'Radiologue'],
            ['name_specialite' => 'Dentiste'],
            ['name_specialite' => 'Psychologue'],
            ['name_specialite' => 'Dermatologue'],
            // Add more specialities as needed
        ];

        DB::table('specialities')->insert($specialities);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InternDetail;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $intern_detail_id = InternDetail::all()->pluck('intern_detail_id');
       
        for ($i=0;$i<10;$i++){
            Education::create([
                'intern_detail_id'=>$faker->randomElement($intern_detail_id),
                'current_edu_level'=>$faker->randomElement(['diploma','degree','master']),
                'current_edu_institution'=>$faker->name,
                'current_institution_location'=>$faker->address,
                'study_field'=>$faker->name,
                'grad_period'=>($faker->dateTime)->format('Y-m-d') . "-" . ($faker->dateTime)->format('Y-m-d')
            ]);
        }
    }
}

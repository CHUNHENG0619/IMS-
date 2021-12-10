<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Intern;
use App\Models\InternDetail;

class InternDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $intern_id = Intern::all()->pluck('intern_id');
       
        for ($i=0;$i<10;$i++){
            InternDetail::create([
                'intern_id'=>$faker->randomElement($intern_id),
                'time_to_start'=>$faker->dateTimeThisYear,
                'time_to_end'=>$faker->dateTimeBetween('next Monday','next Monday +30 days'),
                'text'=>$faker->text,
                'state'=>$faker->state,
                'status'=>$faker->randomElement(['Pending','Accepted','Declined']),
                'time_to_update'=>$faker->dateTimeThisYear,
                'time_to_post'=>$faker->dateTimeThisYear
            ]);
        }
    }
}

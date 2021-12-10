<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssignTask;
use App\Models\Staff;
use App\Models\Intern;

class AssignTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $staff_id = Staff::all()->pluck('staff_id');
        $intern_id = Intern::all()->pluck('intern_id');
       
        for ($i=0;$i<10;$i++){
            AssignTask::create([
                'staff_id' => $faker->randomElement($staff_id),
                'intern_id'=>$faker->randomElement($intern_id),
                'task_title'=>$faker->word,
                'task_description'=>$faker->text,
                'task_status'=>$faker->randomElement(['ongoing','done','pending']),
                'start_time'=>$faker->dateTimeThisYear,
                'deadline'=>$faker->dateTimeBetween('next Monday','next Monday +10 days'),
            ]);
        }
    }
}

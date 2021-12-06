<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubmitTask;
use App\Models\Staff;
use App\Models\Intern;

class SubmitTaskSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $staff_id = Staff::all()->pluck('staff_id');
        $intern_id = Intern::all()->pluck('intern_id');
       
        for ($i=0;$i<10;$i++){
            SubmitTask::create([
                'staff_id' => $faker->randomElement($staff_id),
                'intern_id'=>$faker->randomElement($intern_id),
                'submitted_task_description'=>$faker->text,
            ]);
        }
    }
}

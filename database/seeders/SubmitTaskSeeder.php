<?php

namespace Database\Seeders;

use App\Models\AssignTask;
use Illuminate\Database\Seeder;
use App\Models\SubmitTask;
use App\Models\Staff;
use App\Models\Intern;

class SubmitTaskSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $staff_id = AssignTask::all()->pluck('staff_id');
        $intern_id = AssignTask::all()->pluck('intern_id');
        $task_id = AssignTask::all()->pluck('task_id');

        for ($i=0;$i<10;$i++){
            SubmitTask::create([
                'task_id'=>$faker->randomElement($task_id),
                'staff_id' => $faker->randomElement($staff_id),
                'intern_id'=>$faker->randomElement($intern_id),
                'submitted_task_description'=>$faker->text,
            ]);
        }
    }
}

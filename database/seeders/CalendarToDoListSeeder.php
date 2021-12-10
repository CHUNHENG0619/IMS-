<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalendarToDoList;
use App\Models\User;

class CalendarToDoListSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $user_id = User::all()->pluck('user_id');
       
        for ($i=0;$i<10;$i++){
            CalendarToDoList::create([
                'user_id'=>$faker->randomElement($user_id),
                'description'=>$faker->text,
                'title'=>$faker->word,                 
                'task_color'=>$faker->randomElement(['G','R','Y','B']),
                'task_status'=>$faker->randomElement(['completed','incompleted']),
                'start_time'=>$faker->dateTimeThisMonth,
                'deadline'=>$faker->dateTimeBetween('next Monday','next Monday +1 days')
             ]);
        }
    }
}

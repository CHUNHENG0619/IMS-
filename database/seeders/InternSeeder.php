<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Intern;
use App\Models\Department;

class InternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $user_id = User::all()->pluck('user_id');
        $department_name = Department::all()->pluck('department_name');
       
        for ($i=0;$i<10;$i++){
            Intern::create([
                'user_id' => $faker->randomElement($user_id),
                'intern_name'=>$faker->name,
                'intern_department'=>$faker->randomElement($department_name),
                'intern_email'=>$faker->email,
                'intern_phone'=>$faker->phoneNumber
            ]);
        }
    }
}

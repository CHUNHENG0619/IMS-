<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;
use App\Models\User;
use App\Models\Department;

class StaffSeeder extends Seeder
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
        $department_id = Department::all()->pluck('department_id');
       
        for ($i=0;$i<10;$i++){
            Staff::create([
                'user_id' => $faker->randomElement($user_id),
                'department_id'=> $faker->randomElement($department_id),
             ]);
        }
    }
}

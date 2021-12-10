<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Job;
use App\Models\Department;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $admin_id = Admin::all()->pluck('admin_id');
        $department_name = Department::all()->pluck('department_name');
       
        for ($i=0;$i<10;$i++){
            Job::create([
                'admin_id'=>$faker->randomElement($admin_id),
                'job_title'=>$faker->word,
                'job_department'=>$faker->randomElement($department_name),
                'job_desc'=>$faker->text,
                'job_requirement'=>$faker->text,
                'job_type'=>$faker->jobTitle,
                'job_location'=>$faker->address,
                'salary'=>$faker->randomFloat(2,1300.00,4000.00),
                'start_date'=>$faker->dateTimeThisYear,
                'end_date'=>$faker->dateTimeBetween('next Monday','next Monday +30 days'),
            ]);
        }
    }
}

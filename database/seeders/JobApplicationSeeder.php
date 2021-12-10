<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Intern;
use App\Models\Admin;
use App\Models\JobApplication;

class JobApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $job_id = Job::all()->pluck('job_id');
        $intern_id = Intern::all()->pluck('intern_id');
        $admin_id = Admin::all()->pluck('admin_id');
       
        for ($i=0;$i<10;$i++){
            JobApplication::create([
                'job_id'=>$faker->randomElement($job_id),
                'intern_id'=>$faker->randomElement($intern_id),
                'admin_id'=>$faker->randomElement($admin_id),
                'apply_date'=>$faker->dateTimeThisYear,
                'status'=>$faker->randomElement(['Accepted','Declined','Pending'])
            ]);
        }
    }
}

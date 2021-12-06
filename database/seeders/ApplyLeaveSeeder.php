<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Intern;
use App\Models\Admin;
use App\Models\ApplyLeave;

class ApplyLeaveSeeder extends Seeder
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
        $admin_id = Admin::all()->pluck('admin_id');
       
        for ($i=0;$i<10;$i++){
            ApplyLeave::create([
                'intern_id' => $faker->randomElement($intern_id),
                'admin_id'=>$faker->randomElement($admin_id),
                'start_date'=>$faker->date,
                'end_date'=>$faker->date,
                'remark'=>$faker->text,
                'status'=>$faker->randomElement(['Approved','Declined','Pending'])
             ]);
        }
    }
}

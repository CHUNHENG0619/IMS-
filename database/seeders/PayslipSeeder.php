<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Intern;
use App\Models\Admin;
use App\Models\Payslip;

class PayslipSeeder extends Seeder
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
            Payslip::create([
                'admin_id' => $faker->randomElement($admin_id),
                'intern_id'=>$faker->randomElement($intern_id),
                'amount'=>$faker->randomFloat(2,1300.0,4000.0),
                'payslip_title'=>$faker->word,
                'payslip_date'=>$faker->dateTimeThisDecade 
            ]);
        }
    }
}

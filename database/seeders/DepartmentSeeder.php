<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
       
        for ($i=0;$i<10;$i++){
            Department::create([
                'address'=>$faker->address,
                'office_phone'=>$faker->phoneNumber,               
                'department_name'=>$faker->name,
             ]);
        }
    }
}

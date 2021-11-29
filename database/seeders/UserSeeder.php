<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,3) as $value){
            DB::table('users')->insert([
                'user_id' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'name' => $faker->name,
                'IP_address' => $faker->randomElement(["Intern","Staff"]),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'role' => $faker->randomElement(["Intern","Staff"]),
                'user_type' => $faker->randomElement(["Admin","User"]),
                'recovery_email' => $faker->email,
                'registration_time' => $faker->time,
            ]);
        }
    }
}

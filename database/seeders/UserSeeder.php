<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
       
        for ($i=0;$i<10;$i++){
            User::create([
                'user_id'=>$faker->regexify('[A-Za-z0-9]{10,20}'),
                'email'=>$faker->email,
                'password'=>bcrypt($faker->password),
                'name'=>$faker->name,
                'IP_address'=>$faker->ipv4,
                'address'=>$faker->address,
                'phone'=>$faker->phoneNumber,
                'role'=>$faker->randomElement(['intern','staff','admin']),
                'user_type'=>$faker->randomElement(['A','I']),
                'recovery_email'=>$faker->email,
                'registration_time'=>$faker->dateTime
            ]);
        }
    }
}

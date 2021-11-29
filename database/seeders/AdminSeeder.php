<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;

class AdminSeeder extends Seeder
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
       
        for ($i=0;$i<10;$i++){
            Admin::create([
                'user_id' => $faker->randomElement($user_id),
             ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactUs;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            ContactUs::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'subject' => $faker->word,
                'message' => $faker->text,
            ]);
        }
    }
}

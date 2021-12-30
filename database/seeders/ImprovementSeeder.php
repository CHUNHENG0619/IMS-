<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Improvement;
use App\Models\FAQ;

class ImprovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faq_id = FAQ::all()->pluck('faq_id');

        for ($i = 0; $i < 10; $i++) {
            Improvement::create([
                'faq_id' => $faker->randomElement($faq_id),
                'description' => $faker->text,
            ]);
        }
    }
}

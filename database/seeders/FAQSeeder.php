<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQSeeder extends Seeder
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
            FAQ::create([
                'title' => $faker->word,
                'content' => $faker->text,
                'category' => $faker->word,
                'helpful'=>$faker->boolean
            ]);
        }
    }
}

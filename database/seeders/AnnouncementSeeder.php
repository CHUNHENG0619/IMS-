<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $admin_id = Admin::all()->pluck('admin_id');
       
        for ($i=0;$i<10;$i++){
            Announcement::create([
                'admin_id'=>$faker->randomElement($admin_id),
                'announcement_title'=>$faker->word,
                'announcement_description'=>$faker->text,
                'announcement_date'=>$faker->dateTime,
                'star'=>$faker->boolean,
                'department'=>$faker->name,
                'job_type'=>$faker->jobTitle,
            ]);
        }
    }
}

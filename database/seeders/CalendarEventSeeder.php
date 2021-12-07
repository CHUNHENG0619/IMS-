<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CalendarEvent;

class CalendarEventSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $user_id = User::all()->pluck('user_id');
       
        for ($i=0;$i<10;$i++){
            CalendarEvent::create([
                'user_id'=>$faker->randomElement($user_id),
                'event_title'=>$faker->word,
                // I = Interview , M = Important Meeting, N = Normal Meeting, L = Leisure Event, S = Seminar
                'type_of_event'=>$faker->randomElement(['I','M','N','L','S']),                 
                'event_start_time'=>$faker->dateTime,
                'event_end_time'=>$faker->dateTime,
                'event_description'=>$faker->text,
                'location'=>$faker->randomElement(['Zoom','Google Meet',$faker->address]),
                'meet_link'=>'location'=='Zoom'||'Google Meet'?'':$faker->regexify('https:://meet.google.com/[A-Z]{3}-[A-Z]{3}-[A-Z]{3}')
            ]);
        }
    }
}

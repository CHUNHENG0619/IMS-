<?php

namespace Database\Seeders;

use App\Models\CalendarToDoList;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CalendarEventSeeder::class,
            CalendarToDoListSeeder::class,
            DepartmentSeeder::class,            
            AdminSeeder::class,
            InternSeeder::class,
            InternDetailSeeder::class,
            EducationSeeder::class,
            StaffSeeder::class,
            AnnouncementSeeder::class,
            JobSeeder::class,
            JobApplicationSeeder::class,
            ApplyLeaveSeeder::class,
            PayslipSeeder::class,
            AssignTaskSeeder::class,
            ContactUsSeeder::class,
            FAQSeeder::class,
            ImprovementSeeder::class
        ]);
    }
}

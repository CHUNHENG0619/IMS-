<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\Job;
use App\Models\Admin;
use App\Models\JobApplication;


class JobApplicationController extends Controller
{
    public function addJobApplication()
    {
    
        $jobapplication = new JobApplication();
        $jobapplication->apply_id = "9";
        $jobapplication->job_id = "10";
        $jobapplication->intern_id = "3";
        $jobapplication->admin_id = "3";
        $jobapplication->apply_date = "2021/11/29";
        $jobapplication->status = "exist";
        $jobapplication->save();
        return "Record has been add successfully!";
    }
}

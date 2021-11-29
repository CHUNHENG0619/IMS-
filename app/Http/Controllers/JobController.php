<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Admin;

class JobController extends Controller
{
    public function addJob()
    {
    
        $job = new Job();
        $job->job_id = "10";
        $job->admin_id = "3";
        $job->job_title = "Job Title";
        $job->job_department = "IT";
        $job->job_desc = "Description";
        $job->job_requirement = "Requirement";
        $job->job_type = "Laravel";
        $job->job_location = "Kuala Lumpur";
        $job->salary = "1500";
        $job->start_date = "2021/11/29";
        $job->end_date = "2021/11/30";
        $job->save();
        return "Record has been add successfully!";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\Staff;
use App\Models\AssignTask;

class AssignTaskController extends Controller
{
    public function addAssignTask()
    {
    
        $assigntask = new AssignTask();
        $assigntask->staff_id = "3";
        $assigntask->intern_id = "4";
        $assigntask->task_title = "Task Title";
        $assigntask->task_description = "Task Description";
        $assigntask->task_status = "Completed";
        $assigntask->start_time = "1000-01-01 00:00:00";
        $assigntask->deadline = "2021-11-29 19:20:45";
        $assigntask->save();
        return "Record has been add successfully!";
    }
}

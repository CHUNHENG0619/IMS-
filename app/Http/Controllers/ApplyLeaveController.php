<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\Admin;
use App\Models\ApplyLeave;


class ApplyLeaveController extends Controller
{
    public function addApplyLeave()
    {
    
        $applyleave = new ApplyLeave();
        $applyleave->intern_id = "4";
        $applyleave->admin_id = "3";
        $applyleave->start_date = "2021/03/15";
        $applyleave->end_date = "2021/11/30";
        $applyleave->remark = "Sick";
        $applyleave->status = "Approved";
        $applyleave->save();
        return "Record has been add successfully!";
    }
}

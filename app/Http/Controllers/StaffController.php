<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Staff;
use App\Models\Department;

class StaffController extends Controller
{
    public function addStaff()
    {
        $staff = new Staff();
        $staff->staff_id = "1";
        $staff->user_id = "ABC";
        $staff->department_id = "2";
        $staff->save();
        return "Record has been add successfully!";
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function addDepartment()
    {
    
        $department = new Department();
        $department->department_id = "2";
        $department->address = "Kuala Lumpur";
        $department->office_phone = "01246803579";
        $department->department_name = "IT";
        $department->save();
        return "Record has been add successfully!";
    }
}

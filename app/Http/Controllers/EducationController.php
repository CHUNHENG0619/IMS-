<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternDetail;
use App\Models\Education;

class EducationController extends Controller
{
    public function addEducation()
    {
    
        $education = new Education();
        $education->edu_id = "6";
        $education->intern_detail_id = "7";
        $education->current_edu_level = "Diploma";
        $education->current_edu_institution = "TARUC";
        $education->current_institution_location = "TARUC";
        $education->study_field = "TARUC";
        $education->grad_period = "A";
        $education->save();
        return "Record has been add successfully!";
    }
}

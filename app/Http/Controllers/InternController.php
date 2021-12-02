<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\User;

class InternController extends Controller
{
    public function addIntern()
    {
    
        $intern = new Intern();
        $intern->intern_id = "4";
        $intern->user_id = "ABC";
        $intern->intern_name = "Ali Baba";
        $intern->intern_department = "IT";
        $intern->intern_email = "alibaba@gmail.com";
        $intern->intern_phone = "0123456789";
        $intern->save();
        return "Record has been add successfully!";
    }

    //xirouh and seaiyou part

       //edit profilelike education background/view job application status
     public function EditProfile(){

    }

    //Apply leave
    public function ApplyLeave(){

    }

    //View payslip
    public function ViewPayslip(){

    }

    //View task
    public function ViewTask(){

    }

    //View select task
    public function ViewSelectTask($task_id){

    }

    //Submit task
    public function SubmitTask($task_id){

    }

    //Delete submitted task
    public function DeleteSubmittedTask($task_id){

    }

    //View calender
    public function Calender(){
        
    }
}

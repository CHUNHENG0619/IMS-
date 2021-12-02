<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{
    public function addAdmin()
    {
    
        $admin = new Admin();
        $admin->admin_id = "3";
        $admin->user_id = "2";
        $admin->save();
        return "Record has been add successfully!";
    }

    //Xirouh and Seaiyou part

     //For announcement CRUD
     public function ShowAnnouncement(){

    }

    public function ShowSelectAnnouncement($announcement_id){

    }

    public function CreateAnnouncement(){

    }

    public function UpdateAnnouncement(){

    }

    public function DeleteAnnouncement(){

    }

    //For job CRUD
    public function ShowJob(){

    }

    public function ShowSelectJob($job_id){

    }

    public function CreateJob(){

    }

    public function UpdateJob(){

    }

    public function DeleteJob(){

    }

    //For payslip CRUD
    public function ShowPayslip(){

    }

    public function ShowSelectPayslip($payslip_id){

    }

    public function CreatePayslip(){

    }

    public function UpdatePayslip(){

    }

    public function DeletePayslip(){

    }

    //View all job application and accept/reject
    public function ViewJobApplication(){

    }

    //View all leave application and accept/reject
    public function ViewLeaveApplied(){

    }

    //View calender
    public function Calender(){
        
    }
}

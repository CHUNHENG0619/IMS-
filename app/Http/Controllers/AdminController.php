<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ims;
use App\Http\Controllers\Controller;
use DataTables;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use App\Models\Payslip;
use App\Models\Intern;
use App\Models\Job;

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
    public function Payslip(){
        return view('admin.adminHome');
    }
/*
    public function PayslipHistory(){
        return view('admin.payslipHistory');
    }

    public function ShowPayslipHistory(){

        $data = Payslip::join('interns','interns.intern_id','=','payslips.intern_id')
            ->join('departments','departments.department_id','=','interns.department_id')
            ->join('jobs','jobs.admin_id','=','payslips.admin_id')
            ->get(['interns.intern_name','payslips.intern_id','departments.department_name','jobs.job_type','jobs.salary','payslips.payslip_date']);

        return response()->json([
            'data' => $data,
        ]);

    }
*/
    public function ShowPayslip(){
        $payslips = Payslip::all();
        return response()->json([
            'payslips'=>$payslips,
        ]);
    }

    public function ShowSelectPayslip($payslip_id){
        $payslip = Payslip::where("payslip_id", $payslip_id)->first();
        if($payslip){
            return response()->json([
                'status'=>200,
                'payslip'=>$payslip,
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'Payslip Not Found',
            ]);
        }
    }

    public function CreatePayslip(Request $request){
        $validator = Validator::make($request->all(),[
            'admin_id'=>'required|max:191',
            'intern_id'=>'required|max:191',
            'amount'=>'required|max:191',
            'payslip_title'=>'required|max:191',
            'payslip_date'=>'required|date|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else{
            $payslip = new Payslip;
            $payslip->admin_id = $request->input('admin_id');
            $payslip->intern_id = $request->input('intern_id');
            $payslip->amount = $request->input('amount');
            $payslip->payslip_title = $request->input('payslip_title');
            $payslip->payslip_date = $request->input('payslip_date');
            $payslip->save();
            return response()->json([
                'status'=>200,
                'message'=>'Payslip Added Successfully',
            ]);
        }
    }

    public function UpdatePayslip(Request $request, $payslip_id){
        $validator = Validator::make($request->all(),[
            'admin_id'=>'required|max:191',
            'intern_id'=>'required|max:191',
            'amount'=>'required|max:191',
            'payslip_title'=>'required|max:191',
            'payslip_date'=>'required|date|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        
            $payslip = Payslip::where("payslip_id", $payslip_id)->update(['admin_id' => $request->input('admin_id'),
            'intern_id'=> $request->input('intern_id'),
            'amount'=> $request->input('amount'),
            'payslip_title'=> $request->input('payslip_title'),
            'payslip_date'=> $request->input('payslip_date')]);
            if($payslip){
            //$payslip->admin_id = $request->input('admin_id');
            //$payslip->intern_id = $request->input('intern_id');
            //$payslip->amount = $request->input('amount');
            //$payslip->payslip_title = $request->input('payslip_title');
            //$payslip->payslip_date = $request->input('payslip_date');
            //$payslip->save();
            return response()->json([
                'status'=>200,
                'message'=>'Payslip Updated Successfully',
            ]);
            }
            else{
                return response()->json([
                    'status'=>404,
                    'message'=>'Payslip Not Found',
                ]);
            }
            
        
    }

    public function DeletePayslip($payslip_id){
        $payslip = Payslip::where("payslip_id", $payslip_id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Payslip Deleted Successfully',
        ]);
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

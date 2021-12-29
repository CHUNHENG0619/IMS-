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

    public function viewJobApplication(){
        $jobapplication = JobApplication::all();
        if($jobapplication){
            return response()->json([
                'status'=>200,
                'jobapplication'=>$jobapplication,
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'jobapplication no found',
            ]);
        }
    }

    public function detailJobApplication($apply_id){
        $jobapplication= jobapplication::find($jobapplication);
        if($jobapplication){
            return response()->json([
                'status'=>200,
                'jobapplication'=>$jobapplication,
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'jobapplication no found',
            ]);
        }
    }

    public function updateJobApplication(Request $request, $id){
        $JobApplication = JobApplication::find($id);
        if($JobApplication){
            if($JobApplication->status != 'Accept' && $JobApplication->status != 'Reject'){
                $JobApplication->status =$request->status;
                $JobApplication->update();
                
                return response()->json([
                    'status'=>200,
                    'message'=>'Successfully',
                ]);
            }else{
                return response()->json([
                    'status'=>404,
                    'message'=>'JobApplication already processed',
                ]);
            }
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'JobApplication no found',
            ]);
        }
    }

    
}

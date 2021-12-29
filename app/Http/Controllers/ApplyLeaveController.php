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

    public function viewApplyLeave(){
        $applyLeave = ApplyLeave::all();
        if($applyLeave){
            return response()->json([
                'status'=>200,
                'applyLeave'=>$applyLeave,
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'applyLeave no found',
            ]);
        }
    }

    public function detailApplyLeave($leave_id){
        $applyLeave= ApplyLeave::find($leave_id);
        if($applyLeave){
            return response()->json([
                'status'=>200,
                'applyLeave'=>$applyLeave,
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'applyLeave no found',
            ]);
        }
    }

    public function updateApplyLeave(Request $request, $leave_id){
        $applyLeave = ApplyLeave::find($leave_id);
        if($applyLeave){
            if($applyLeave->status != 'Accept' && $applyLeave->status != 'Reject'){
                $applyLeave->status = $request->status;
                $applyLeave->update();

                return response()->json([
                    'status'=>200,
                    'message'=>'Successfully',
                ]);
            }else{
                return response()->json([
                    'status'=>200,
                    'message'=>'ApplyLeave already processed',
                ]);
            }
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'ApplyLeave no found',
            ]);
        }
    }
}

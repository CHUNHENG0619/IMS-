<?php

namespace App\Http\Controllers;

use App\Models\AssignTask;
use App\Models\ExampleInsert;
use App\Models\SubmitTask;
use Illuminate\Http\Request;
use App\Models\Intern;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use File;

use App\Models\User;
use DB;

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

    //edit profilelike education background/view job application status
    public function EditProfile()
    {

    }

    //Apply leave
    public function ApplyLeave()
    {

    }

    //View payslip
    public function ViewPayslip()
    {

    }

    //View task
    public function ViewTask()
    {
        $status = 'pending';

        $result = AssignTask::where('task_status', "!=", $status)
            ->get();
        return view('ViewTask', ['tasks' => $result]);

        // return response()->json([
        //     'AssignTask'=>$task,
        // ]);
    }

    //View select task
    public function ViewSelectTask($task_id)
    {

        $result = AssignTask::where('task_id', $task_id)->get();
        $filename = SubmitTask::where('task_id', $task_id)->get();

        if($result){
            return view('SelectTask', ['tasks' => $result, 'submmiteds' => $filename]);
        }else{
            return 'no task found.';
        }
        // $task = AssignTask::find($task_id);
        // return response()->json([
        //     'AssignTask'=>$task,
        // ]);

    }

    //Submit task
    public function SubmitTask(Request $req, $task_id)
    {
        $req->validate([
            'intern_submitted_task' => 'required|mimes:jpeg,png,jpg,svg,doc,docx,odt,pdf,tex,txt,wpd,tiff,tif,csv,psd,key,odp,pps,ppt,pptx,ods,xls,xlsm,xlsx',
            'submitted_task_description' => 'required',
        ]);

        $detail = AssignTask::where('task_id', $task_id)
            ->first('staff_id');
        $detail1 = AssignTask::where('task_id', $task_id)
            ->first('intern_id');

        //get file, change file name and upload file
        $intern_submitted_task = $req->file('intern_submitted_task');
        $file_ext = $intern_submitted_task->getClientOriginalName();
        $file_name = time() . "_" . $file_ext;
        $file_path = public_path('/files');
        $intern_submitted_task->move($file_path, $file_name);

        //store to submit_tasks database
        $submit_task = new SubmitTask();
        $submit_task->task_id = $task_id;
        $submit_task->staff_id = $detail->staff_id;
        $submit_task->intern_id = $detail1->intern_id;// auth()->user()->id
        $submit_task->intern_submitted_task = $file_name;
        $submit_task->submitted_task_description = $req->submitted_task_description;
        $submit_task->save();

        //uptade task status
        $task_status = 'done';
        DB::update('update assign_tasks set task_status=? where task_id = ?', [$task_status, $task_id]);

        return redirect()->back()->with('success_submit', "Task Submit Successfully!");
    }

    //Delete submitted task
    public function DeleteSubmittedTask($task_id)
    {
        //get the value from database
        $intern_id = AssignTask::where('task_id', $task_id)
            ->value('intern_id');
        $status = AssignTask::where('task_id', $task_id)
            ->value('task_status');
        $intern_submitted_task = SubmitTask::where('task_id', $task_id)
            ->value('intern_submitted_task');

        //return error msg
        if ($status == 'ongoing' || $intern_submitted_task == null){
            return back()->with('error', "You Haven't Submit Any File!")  ;
        }
        //get file name in database and delete file in (public/files) directory
        $file_name = $intern_submitted_task;
        $file_path = public_path('files/' . $file_name);
        File::delete($file_path);

        DB::delete('delete from submit_tasks where task_id = ? and intern_id = ?', [$task_id, $intern_id]);

        //update task status to ongoing
        $task_status = 'ongoing';
        DB::update('update assign_tasks set task_status=? where task_id = ? and intern_id = ?', [$task_status, $task_id, $intern_id]);

        return redirect()->back()->with('success_delete', "Task Unsubmit Successfully!");
    }

    //View calender
    public function Calender()
    {

    }
}

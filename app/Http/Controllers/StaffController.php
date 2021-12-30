<?php

namespace App\Http\Controllers;

use App\Models\assign_tasks;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StaffController;

class StaffController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
   
        $assign_tasks = assign_tasks::latest()->get();
        
        if ($request->ajax()) {
            $data = assign_tasks::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-task_id="'.$row->task_id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editTask">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-task_id="'.$row->task_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteTask">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('task',compact('assign_tasks'));
    }
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        assign_tasks::updateOrCreate(['task_id' => $request->task_id],
                ['staff_id' => $request->staff_id, 'intern_id' => $request->intern_id, 'task_title' => $request->task_title, 'task_description' => $request->task_description, 'task_status' => $request->task_status, 'attachment' => $request->attachment, 'start_time' => $request->start_time, 'deadline' => $request->deadline]);        
   
        return response()->json(['success'=>'Saved successfully.']);
       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\assign_tasks  $assign_tasks
     * @return \Illuminate\Http\Response
     */
    public function edit($task_id)
    {
        $assign_tasks = assign_tasks::find($task_id);
        return response()->json($assign_tasks);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\assign_tasks  $assign_tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($task_id)
    {
        assign_tasks::find($task_id)->delete();
     
        return response()->json(['success'=>'Deleted successfully.']);
    }
}

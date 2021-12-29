@extends('layouts.app')

@section('content')


    <h2 style="text-align: center"> View Task </h2>
    <div class="alert-success">{{ session()->get('success_submit') }}</div>
    <div class="alert-success">{{ session()->get('success_delete') }}</div>
    <div class="alert-danger">{{ session()->get('error') }}</div>
     <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Decription</th>
            <th>Attachment</th>
            <th>Start Time</th>
            <th>Deadline</th>
            <th>Status</th>
            <th style="width: 300px">Task</th>
            <th>Decription For Task</th>

            <th colspan="2" style="text-align: center">Action</th>
        </tr>
        </thead>
        <tbody>


        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->task_id }}</td>
                <td>{{ $task->task_title }}</td>
                <td>{{ $task->task_description }}</td>
                <td>{{ $task->attachment }}</td>
                <td>{{ $task->start_time }}</td>
                <td>{{ $task->deadline }}</td>
                <td>{{ $task->task_status }}</td>
                <form enctype="multipart/form-data" method="post"
                      action="{{route('SubmitTask',['task_id' => $task->task_id])}}">{{--            submit/{{$task->task_id}}--}}
                    @csrf
                    <td>
                        <input class="form-control" id="customFile" type="file" name="intern_submitted_task">
                        @foreach ($submmiteds as $submmited)
                            <a>{{ $submmited->intern_submitted_task}}</a>
                        @endforeach
                        <div class="alert-danger">{{$errors->first('intern_submitted_task')}}</div>

                    </td>
                    <td>
                        <input style="size: 100px" type="text" name="submitted_task_description">
                        <div class="alert-danger">{{$errors->first('submitted_task_description')}}</div>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </td>
                </form>
                <td><a class="btn btn-danger" href='unsubmit/{{ $task->task_id }}'>Unsubmit</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <td>
        <a class="btn btn-primary" style="float:right; margin-right: 15px" href='{{route('ViewTask')}}'>Back</a></td>

@endsection


@section('scripts')
    <script>


    </script>
@endsection

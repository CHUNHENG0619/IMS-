@extends('layouts.app')

@section('content')

<style>
#task:hover{
    background-color: #a0aec0;
}

</style>

    <h2 style="text-align: center"> View Task </h2>
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
        </tr>
        </thead>
        <tbody>


        @foreach ($tasks as $task)
            <div>
            <tr  id="task" class="clickable" style="cursor: pointer;" onclick="window.location='{{ route('ViewSelectTask',['task_id' => $task->task_id])}}'">
                <td>{{ $task->task_id }}</td>
                <td>{{ $task->task_title }}</td>
                <td>{{ $task->task_description }}</td>
                <td>{{ $task->attachment }}</td>
                <td>{{ $task->start_time }}</td>
                <td>{{ $task->deadline }}</td>
                <td>{{ $task->task_status }}</td>
            </tr>
            </div>
        @endforeach
        </tbody>
    </table>

@endsection


@section('scripts')
    <script>


    </script>
@endsection

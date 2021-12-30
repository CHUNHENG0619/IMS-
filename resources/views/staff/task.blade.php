<!DOCTYPE html>
<html>
<head>
    <title>Assign Task</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <a class="btn btn-success" href="javascript:void(0)" id="createNewTask"> Create New Task</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Task ID</th>
                <th>Staff ID</th>
                <th>Intern ID</th>
                <th>Task Title</th>
                <th>Task Description</th>
                <th>Task Status</th>
                <th>Attachment</th>
                <th>Start Time</th>
                <th>Deadline</th>
                <th width="300px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="TaskForm" name="TaskForm" class="form-horizontal">
                   <input type="hidden" name="task_id" id="task_id">

                   <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Staff_ID</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="staff_id" name="staff_id" placeholder="Enter staff_id" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Intern_ID</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="intern_id" name="intern_id" placeholder="Enter intern_id" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Task_Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="task_title" name="task_title" placeholder="Enter Task_Title" value="" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Task_Description</label>
                        <div class="col-sm-12">
                            <textarea id="task_description" name="task_description" required="" placeholder="Enter Task_Description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Task_Status</label>
                        <div class="col-sm-12">
                        <select id="task_status" name="task_status">
                            <option value="Ongoing">Ongoing</option>
                            <option value="Done">Done</option>
                            <option value="Pending">Pending</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Attachment</label>
                        <div class="col-sm-12">
                            <textarea id="attachment" name="attachment" required="" placeholder="Enter Attachment" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Start_Time</label>
                        <div class="col-sm-12">
                        <input type="datetime-local" class="form-control" id="start_time" name="start_time" placeholder="Enter start time" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Deadline</label>
                        <div class="col-sm-12">
                        <input type="datetime-local" class="form-control" id="deadline" name="deadline" placeholder="Enter deadline" value="" required="">
                        </div>
                    </div>

      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('task.index') }}",
        columns: [
            {data: 'task_id', name: 'task_id'},
            {data: 'staff_id', name: 'staff_id'},
            {data: 'intern_id', name: 'intern_id'},
            {data: 'task_title', name: 'task_title'},
            {data: 'task_description', name: 'task_description'},
            {data: 'task_status', name: 'task_status'},
            {data: 'attachment', name: 'attachment'},
            {data: 'start_time', name: 'start_time'},
            {data: 'deadline', name: 'deadline'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewTask').click(function () {
        $('#saveBtn').val("create-Task");
        $('#Task_id').val('');
        $('#TaskForm').trigger("reset");
        $('#modelHeading').html("Create New Task");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editTask', function () {
      var id = $(this).data('task_id');
      $.get("{{ route('task.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Edit Task");
          $('#saveBtn').val("editTask");
          $('#ajaxModel').modal('show');
          $('#task_id').val(data.task_id);
          $('#staff_id').val(data.staff_id);
          $('#intern_id').val(data.intern_id);
          $('#task_title').val(data.task_title);
          $('#task_description').val(data.task_description);
          $('#attachment').val(data.attachment);
          $('#start_time').val(data.start_time);
          $('#deadline').val(data.deadline);
      })
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#TaskForm').serialize(),
          url: "{{ route('task.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#TaskForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              confirm("Please enter a valid staff ID or intern ID and make sure every column is filled in.");
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deleteTask', function () {
     
        var id = $(this).data("task_id");
        confirm("Task deleted!");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('task.store') }}"+'/'+id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
</script>
</body>
</html>
@extends('layout.app')

@section('content')

<!--ADD Modal -->

<div class="modal fade" id="addstudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INFORMATION Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="saveform_errList" ></ul>
                <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type="text" class="name form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Department</label>
                    <input type="text" class="department form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" class="email form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Phone</label>
                    <input type="text" class="phone form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_student">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- View profile detail -->


<!-- Edit  Edit Student  modal -->
<div class="modal fade" id="EditstudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Information Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="updateform_errList"></ul>
                <input type="hidden"id="edit_stud_id"  >

                <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type="text"id="edit_name" class="name form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Department</label>
                    <input type="text" id="edit_department" class="course form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" id="edit_email" class="email form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Phone</label>
                    <input type="text" id="edit_phone"  class="phone form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update-student ">Upadate</button>
            </div>
        </div>
    </div>
</div>
 

<!-- delete modal -->
<div class="modal fade" id="deletestudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">delete student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="delete_stud_id">
            <h4>Are you sure to delete this data?</h4>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_student_btn">yes</button>
      </div>
    </div>
  </div>
</div>
<!-- end delete modal -->
</div>
 
<!-- Button trigger modal -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <div id="success_message"></div>

            <div class="card">
                <div class="card-header">
                    <h4>Student Data
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addstudentModal" class="btn btn-primary float-end btn-sm">Add</a>
                     
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Deparment</th>
                                <th>Email</th>
                                <th>Phone</th> 
                                <th>Edit</th>
                                <th>Delete</th>
                                 
                            </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

    $(document).ready(function () {

        fetchstudent();

        function fetchstudent() {
            $.ajax({
                type: "GET",
                url: "/fetch-student",
                datatype: "json",
                success: function (response) {
                    // console.log(response.Student);
                    $('tbody').html("");
                    $.each(response.intern, function (key, item) {
                        $('tbody').append(
                          '<tr>\
                           <td> '+item.intern_id+'</td>\
                           <td>'+item.intern_name+'</td>\
                           <td>'+item.intern_department+'</td>\
                          <td> '+item.intern_email+' </td>\
                           <td>'+item.intern_phone+'</td>\
                            <td> <button type="button" value="'+item.intern_id+'" class="edit_student btn btn-primary tbn-sm">Edit</button></td>\
                           <td><button type="button" value="'+item.intern_id+'" class="delete_student btn btn-danger tbn-sm">Delete</button></td>\
                           <td><button type="button" value="'+item.intern_id+'" class="view_student btn btn-primary tbn-sm">View</button></td>\
                           </tr>'
                           )
                             });
                            }
                      });
        }

        $(document).on('click', '.delete_student',function(e){
          e.preventDefault();
          var intern_id = $(this).val();
          // alert(stud_id);
          $('#delete_stud_id').val(intern_id);
          $('#deletestudentModal').modal('show');
        });

        $(document).on('click', '.delete_student_btn',function(e){
          e.preventDefault();

          $(this).text("deleting");
          var intern_id = $('#delete_stud_id').val();

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
            type: "DELETE",
            url: "/delete-student/"+intern_id,
            success: function(response){
              //  console.log(response);
                $('#success_message').addClass('alert alert-success')
                $('#success_message').text(response.message);
                $('#deletestudentModal').modal('hide');
                $('.delete_student_btn').text("yes");
                fetchstudent();
            }
          });
          
        });

        $(document).on('click', '.edit_student',function(e){
          e.preventDefault();
          var intern_id =$(this).val();
        //   console.log(stud_id);
          $('#EditstudentModal').modal('show');
          $.ajax({
            type: "GET",
            url: "/edit-student/"+intern_id,
            success: function(response){
            //    console.log(response);
              if(response.status ==404){
                $('#success_message').html("");
                $('#success_message').addClass('alert alert-danger');
                $('#success_message').text(response.message);

              }else{
                $('#edit_name').val(response.intern.intern_name);
                $('#edit_department').val(response.intern.intern_department);
                $('#edit_email').val(response.intern.intern_email);
                $('#edit_phone').val(response.intern.intern_phone); 
                $('#edit_stud_id').val(intern_id);
              }
            }
          });
        });

        $(document).on('click', '.update-student',function(e){
          e.preventDefault();
          $(this).text("updating");

          var intern_id =$('#edit_stud_id').val();
          var data={
            'intern_name':$('#edit_name').val(),
            'intern_department':$('#edit_department').val(),
            'intern_email':$('#edit_email').val(),
            'intern_phone':$('#edit_phone').val(),
          }

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
            type: "PUT",
            url: "/update-student/"+intern_id,
            data:data,
            dataType: "json",
            success:function (response){
              // console.log(response);
              if(response.status == 400){
                //error
                  $('#updateform_errList').html("");
                  $('#updateform_errList').addClass('alert alert-danger');
                  $.each(response.errors, function (key,err_values){
                    $('#updateform_errList').append('<li>'+err_values+'</li>')
                  });
                  $('.update-student').text("update");
              }else if(response.status == 404){
                  $('#updateform_errList').html("");
                  $('#success_message').addClass('alert alert-success')
                  $('#success_message').text(response.message)
                  $('.update-student').text("update");

              }else{
                  $('#updateform_errList').html("");
                  $('#success_message').html("");
                  $('#success_message').addClass('alert alert-success')
                  $('#success_message').text(response.message)

                  $('#EditstudentModal').modal('hide');
                  $('.update-student').text("update");

                  fetchstudent();
              }
            }
          });
        });
                            $(document).on('click', '.add_student', function (e) {
                                e.preventDefault();
                                var data = {
                                     'intern_name': $('.name').val(),
                                    'intern_department': $('.department').val(),
                                    'intern_email': $('.email').val(),
                                    'intern_phone': $('.phone').val(),
                                }

                             console.log(data);


                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });


                                $.ajax({
                                    type: "POST",
                                    url: "/intern",
                                    data: data,
                                    datatype: "json",
                                    success: function (response) {
                                        // console.log(response);
                                        if (response.status == 400) {
                                            $('#saveform_errList').html("");
                                            $('#saveform_errList').addClass('alert alert-danger');
                                            $.each(response.errors, function (key, err_values) {
                                                $('#saveform_errList').append('<li>' + err_values + '</li>')
                                            });
                                        } else {
                                            $('#saveform_errList').html("");
                                            $('#success_message').addClass('alert alert-success')
                                            $('#success_message').text(response.message)
                                            $('#addstudentModal').modal('hide');
                                            $('#addstudentModal').find('input').val("");
                                        }
                                    }
                                });
                            });
                        });
    </script>
@endsection
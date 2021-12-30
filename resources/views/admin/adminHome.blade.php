@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
            </div>
        </div>
    </div>
</div>

{{--AddPayslipModal--}}
<div class="modal fade" id="AddPayslipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Payslip</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <ul id="saveform_errList"></ul>
        <div class ="form-group mb-3">
            <label for="">Admin Id</label>
            <input type="text" class="adminid form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Intern Id</label>
            <input type="text" class="internid form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Amount</label>
            <input type="text" class="amount form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Payslip Title</label>
            <input type="text" class="paysliptitle form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Payslip Date</label>
            <input type="text" class="payslipdate form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_payslip">Save</button>
      </div>
    </div>
  </div>
</div>
{{--End- AddPayslipModal--}}

{{--EditPayslipModal--}}

<div class="modal fade" id="EditPayslipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit & Update Payslip</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <ul id="updateform_errList"></ul>

      <input type="hidden" id="edit_payslip_id">
        <div class ="form-group mb-3">
            <label for="">Admin ID</label>
            <input type="text" id="edit_admin_id" class="admin_id form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Intern ID</label>
            <input type="text" id="edit_intern_id" class="intern_id form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Amount</label>
            <input type="text" id="edit_amount" class="amount form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Payslip Title</label>
            <input type="text" id="edit_payslip_title" class="payslip_title form-control">
        </div>
        <div class ="form-group mb-3">
            <label for="">Payslip Date</label>
            <input type="text" id="edit_payslip_date" class="payslip_date form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_payslip">Update</button>
      </div>
    </div>
  </div>
</div>

{{--End- EditPayslipModal--}}

{{--DeletePayslipModal--}}

<div class="modal fade" id="DeletePayslipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Payslip</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <input type="hidden" id="delete_payslip_id">
      <h4>Are you sure want to delete this data ?</h4>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_payslip_btn">Yes Delete</button>
      </div>
    </div>
  </div>
</div>

{{--End- DeletePayslipModal--}}


<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

        <div id="success_message"></div>

            <div class="card">
                <div class="card-header">
                <h4>Payslip Data
                <a href ="#" data-bs-toggle="modal" data-bs-target="#AddPayslipModal" class="btn btn-primary float-end btn-sm">Add Payslip</a>
                </h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Admin ID</th>
                                <th>Intern ID</th>
                                <th>Amount</th>
                                <th>Payslip Title</th>
                                <th>Payslip Date</th>
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

$(document).ready(function(){

    ShowPayslip();

        function ShowPayslip(){

            
            $.ajax({
                type:"GET",
                url:"/show-payslip",
                dataType:"json",
                success: function(response){
                    //console.log(response.payslips);
                    $('tbody').html("");
                    $.each(response.payslips, function (key, item){
                        $('tbody').append('<tr>\
                                <td>'+item.payslip_id+'</td>\
                                <td>'+item.admin_id+'</td>\
                                <td>'+item.intern_id+'</td>\
                                <td>'+item.amount+'</td>\
                                <td>'+item.payslip_title+'</td>\
                                <td>'+item.payslip_date+'</td>\
                                <td><button type="button" value="'+item.payslip_id+'" class="edit_payslip btn btn-primary btn-sm">Edit</button></td>\
                                <td><button type="button" value="'+item.payslip_id+'" class="delete_payslip btn btn-danger btn-sm">Delete</button></td>\
                            </tr>');
                    });

                }
            });
        }

    $(document).on('click','.add_payslip', function(e){
            e.preventDefault();
            
            var data = {
                'admin_id':$('.adminid').val(),
                'intern_id':$('.internid').val(),
                'amount':$('.amount').val(),
                'payslip_title':$('.paysliptitle').val(),
                'payslip_date':$('.payslipdate').val(),
            }
            //console.log(data);
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            
            $.ajax({
                type:"POST",
                url:"/admin/home",
                data: data,
                dataType:"json",
                success: function(response){
                    //console.log(response);
                    if(response.status == 400){
                        $('#saveform_errList').html("");
                        $('#saveform_errList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_values){
                            $('#saveform_errList').append('<li>'+err_values+'</li>');

                        });

                    }
                    else{
                        $('#saveform_errList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#AddPayslipModal').modal('hide');
                        $('#AddPayslipModal').find('input').val("");
                        ShowPayslip();
                    }

                }

            });
        });

        $(document).on('click','.edit_payslip', function(e){
            e.preventDefault();
            var payslip_id = $(this).val();
            //console.log(payslip_id);
            $('#EditPayslipModal').modal('show');
            $.ajax({
                type:"GET",
                url:"/edit-payslip/"+payslip_id,
                success: function(response){
                    //console.log(response);
                    if(response.status == 404){
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);
                    }else{
                        $('#edit_admin_id').val(response.payslip.admin_id);
                        $('#edit_intern_id').val(response.payslip.intern_id);
                        $('#edit_amount').val(response.payslip.amount);
                        $('#edit_payslip_title').val(response.payslip.payslip_title);
                        $('#edit_payslip_date').val(response.payslip.payslip_date);
                        $('#edit_payslip_id').val(payslip_id);
                    }
                }
        }); 

        });

        $(document).on('click','.update_payslip', function(e){
            e.preventDefault();

            $(this).text("Updating");
            var payslip_id = $('#edit_payslip_id').val();
            var data = {
                'admin_id' : $('#edit_admin_id').val(),
                'intern_id' : $('#edit_intern_id').val(),
                'amount' : $('#edit_amount').val(),
                'payslip_title' : $('#edit_payslip_title').val(),
                'payslip_date' : $('#edit_payslip_date').val(),
            }

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
                type:"PUT",
                url:"/update-payslip/"+payslip_id,
                data: data,
                dataType:"json",
                success: function(response){
                    console.log(response);
                    if(response.status == 400){

                        $('#updateform_errList').html("");
                        $('#updateform_errList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_values){
                            $('#updateform_errList').append('<li>'+err_values+'</li>');

                        });
                        $('.update_payslip').text("Update");

                    }else if(response.status == 404){

                        $('#updateform_errList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.update_payslip').text("Update");

                    }else{

                        $('#updateform_errList').html("");
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message)

                        $('#EditPayslipModal').modal('hide');
                        $('.update_payslip').text("Update");
                        ShowPayslip();
                    }
                }
            });


        });

        $(document).on('click','.delete_payslip', function(e){
            e.preventDefault();
            var payslip_id = $(this).val();
            //alert(payslip_id);
            $('#delete_payslip_id').val(payslip_id);
            $('#DeletePayslipModal').modal('show');
        });

        $(document).on('click','.delete_payslip_btn', function(e){
            e.preventDefault();

            $(this).text("Deleting");
            var payslip_id = $('#delete_payslip_id').val();

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            
            $.ajax({
                type:"DELETE",
                url:"/delete-payslip/"+payslip_id,
                success: function(response){
                    console.log(response);
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('#DeletePayslipModal').modal('hide');
                    $('.delete_payslip_btn').text("Yes Delete");
                    ShowPayslip();
                }
        });
            
    }); 
}); 
</script>  

@endsection


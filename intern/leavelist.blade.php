<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Leave Application List</title>
<head>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <script src="https://use.fontawesome.com/cd636b65bd.js"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <div id="success_message"></div>
 
            <div class="card">
                <div class="card-header">
                    <h4>
                        Leave Application List
                        <a href="http://127.0.0.1:8000/leaveform"><button type="button" class="btn btn-primary float-end">New Application</button></a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Leave Information</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Remark</th>
                                <th>Status</th>
                                <th>Cancel</th>
                            </tr>
                            <tr>
                                <td>L001</td>
                                <td>Sick Leave with Reason:</td>
                                <td>2/12/2021</td>
                                <td>3/12/2021</td>
                                <td>Whole Day Leave</td>
                                <td><button type="button" value="" class="btn btn-primary statusbtn btn-sm">Pending</button></td>
                                <td><button type="button" value="" class="btn btn-danger deletebtn btn-sm">Cancel</button></td>
                            </tr>
                            <tr>
                                <td>L002</td>
                                <td>Casual Leave with Reason:</td>
                                <td>22/12/2021</td>
                                <td>25/12/2021</td>
                                <td>Whole Day Leave</td>
                                <td><button type="button" value="" class="btn btn-success statusbtn btn-sm">Approved</button></td>
                                <td><button type="button" value="" class="btn btn-danger deletebtn btn-sm">Cancel</button></td>
                            </tr>
                            <tr>
                                <td>L003</td>
                                <td>Sick Leave with Reason:</td>
                                <td>30/12/2021</td>
                                <td>31/12/2021</td>
                                <td>Half Day Leave</td>
                                <td><button type="button" value="" class="btn btn-warning statusbtn btn-sm">Rejected</button></td>
                                <td><button type="button" value="" class="btn btn-danger deletebtn btn-sm">Cancel</button></td>
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
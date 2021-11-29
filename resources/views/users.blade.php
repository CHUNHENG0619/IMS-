<html>
    <body>
    <head>
        <h1><br>View Records</br></h1>
        <style>
            h1{
                margin-left:850px;
            }
            body{
                background-color:lightgreen;
            }
            table{
                border: 5px solid;
                width:100%;
                text-align:center;
                border-collapse:collapse;
                margin:100px 100px 100px 100px;
            }
        </style>
    </head>    

    </body>
    <table border='1'>
        <tr>
        <td>User Id</td>    
        <td>Email</td>
        <td>Password</td>
        <td>Name</td>
        <td>IP Address</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Role</td>
        <td>User Type</td>
        <td>Recovery Email</td>
        <td>Registration Time</td>
        </tr>
        @foreach($users as $key => $data)
        <tr>
            <th>{{$data->user_id}}</th>
            <th>{{$data->email}}</th>
            <th>{{$data->password}}</th>
            <th>{{$data->name}}</th>
            <th>{{$data->IP_address}}</th>
            <th>{{$data->address}}</th>
            <th>{{$data->phone}}</th>
            <th>{{$data->role}}</th>
            <th>{{$data->user_type}}</th>
            <th>{{$data->recovery_email}}</th>
            <th>{{$data->registration_time}}</th>
        </tr>
        @endforeach
    </table>
</html>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CalendarToDoList;
use App\Models\CalendarEvent;
use App\Models\Staff;
use App\Models\Admin;
use App\Models\Intern;

class UserController extends Controller
{
    public function addUser()
    {
    
        $user = new User();
        $user->user_id = "ABC";
        $user->email = "alanfongg002@gmail.com";
        $user->password = encrypt('secret');
        $user->name = "AlanFong";
        $user->IP_address = "127";
        $user->address = "Kuala Lumpur";
        $user->phone = "0123456789";
        $user->role = "User";
        $user->user_type = "A";
        $user->recovery_email = "alanfongg002@gmail.com";
        $user->registration_time = "1000-01-01 00:00:00"; 
        $user->save();
        return "Record has been add successfully!";
    }
}

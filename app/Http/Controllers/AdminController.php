<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{
    public function addAdmin()
    {
    
        $admin = new Admin();
        $admin->admin_id = "3";
        $admin->user_id = "2";
        $admin->save();
        return "Record has been add successfully!";
    }
}

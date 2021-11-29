<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\User;

class InternController extends Controller
{
    public function addIntern()
    {
    
        $intern = new Intern();
        $intern->intern_id = "4";
        $intern->user_id = "ABC";
        $intern->intern_name = "Ali Baba";
        $intern->intern_department = "IT";
        $intern->intern_email = "alibaba@gmail.com";
        $intern->intern_phone = "0123456789";
        $intern->save();
        return "Record has been add successfully!";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\InternDetail;

class InternDetailController extends Controller
{
    public function addInternDetail()
    {
    
        $interndetail = new InternDetail();
        $interndetail->intern_detail_id = "7";
        $interndetail->intern_id = "4";
        $interndetail->time_to_start = "2021/11/29";
        $interndetail->time_to_end = "2021/11/30";
        $interndetail->resume = "Announcement 1";
        $interndetail->text = "Announcement Description";
        $interndetail->state = "Kuala Lumpur";
        $interndetail->status = "Live";
        $interndetail->time_to_update = "1000-01-01 00:00:00";
        $interndetail->time_to_post = "2021-11-29 19:20:45";
        $interndetail->save();
        return "Record has been add successfully!";
    }
}

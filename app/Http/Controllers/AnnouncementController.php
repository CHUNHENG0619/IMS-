<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Admin;

class AnnouncementController extends Controller
{
    public function addAnnouncement()
    {
    
        $announcement = new Announcement();
        $announcement->admin_id = "3";
        $announcement->announcement_title = "Announcement 1";
        $announcement->announcement_description = "Announcement Description";
        $announcement->save();
        return "Record has been add successfully!";
    }
}

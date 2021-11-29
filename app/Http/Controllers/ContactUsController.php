<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function addContactUs()
    {
    
        $contactus = new ContactUs();
        $contactus->contact_id = "5";
        $contactus->name = "Ali Baba";
        $contactus->email = "alibaba@gmail.com";
        $contactus->subject = "subject";
        $contactus->message = "message";
        $contactus->save();
        return "Record has been add successfully!";
    }
}

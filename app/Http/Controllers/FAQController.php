<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    public function addFAQ()
    {
    
        $faq = new FAQ();
        $faq->faq_id = "8";
        $faq->title = "Title";
        $faq->content = "Content";
        $faq->pic = "Picture";
        $faq->category = "Category";
        $faq->helpful = "0";
        $faq->save();
        return "Record has been add successfully!";
    }
}

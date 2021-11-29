<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\Improvement;

class ImprovementController extends Controller
{
    public function addImprovement()
    {
    
        $improvement = new Improvement();
        $improvement->improvement_id = "9";
        $improvement->faq_id = "8";
        $improvement->description = "Improvement Description";
        $improvement->save();
        return "Record has been add successfully!";
    }
}

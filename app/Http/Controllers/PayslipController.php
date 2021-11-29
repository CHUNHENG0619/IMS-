<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\Admin;
use App\Models\Payslip;

class PayslipController extends Controller
{
    public function addPayslip()
    {
    
        $payslip = new Payslip();
        $payslip->payslip_id = "11";
        $payslip->admin_id = "3";
        $payslip->intern_id = "4";
        $payslip->amount = "1500";
        $payslip->save();
        return "Record has been add successfully!";
    }
}

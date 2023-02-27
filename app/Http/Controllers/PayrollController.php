<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use Auth;
use Illuminate\Support\Carbon;

class PayrollController extends Controller
{
    public function PayrollAll(){
        return view('backend.payroll.payroll_all');
    } //end method


    public function PayrollAdd(){
        return view('backend.payroll.payroll_add');
    } //end method
}

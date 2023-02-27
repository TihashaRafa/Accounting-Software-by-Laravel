<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function AttandanceAll(){
        return view('backend.attandance.attandance_all');
    } //end method
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullCalenderController extends Controller
{
    public function index(Request $request){
       
        return view('backend.calender.full_calender');
    }
}


?>
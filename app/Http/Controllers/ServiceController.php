<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use Auth;
use Illuminate\Support\Carbon;

class ServiceController extends Controller
{
    public function ServiceAdd(){
        return view('backend.service.service_add');
    }
    public function ServiceAll(){
        $service = Service::all();
        return view('backend.service.service_all', compact('service'));
    } //end 
}

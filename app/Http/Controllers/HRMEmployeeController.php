<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HRMEmployee;
use Auth;
use Illuminate\Support\Carbon;

class HRMEmployeeController extends Controller
{
    public function EmployeeAdd(){
        return view('backend.employee.employee_add');
    }

    public function EmployeeAll(){
        $employee = HRMEmployee::all();
        return view('backend.employee.employee_all');
    }

    public function EmployeeStore(Request $request){
        HRMEmployee::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'job_title' => $request->job_title,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'date' => $request->date,
            'pay' => $request->pay,
            'amount' => $request->amount,
            'summary' => $request->summary,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('employee.all');
    }// end method

   

  
    
    public function EmployeeEdit($id){
        $employee = HRMEmployee::find($id);
        return view('backend.employee.employee_edit.te_all', ['employee' => $employee]);
    }
    

    public function EmployeeUpdate(Request $request){
        $employee_id = $request->id;
    
        HRMEmployee::findOrFail($employee_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'job_title' => $request->job_title,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'date' => $request->date,
            'pay' => $request->pay,
            'amount' => $request->amount,
            'summary' => $request->summary,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('employee.all');
    }// end method
}

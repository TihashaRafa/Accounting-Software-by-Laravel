<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Auth;
use Illuminate\Support\Carbon;


class StaffController extends Controller
{
    public function StaffAdd(){
        return view('backend.staff.staff_add');
    }
    public function StaffAll(){
        $staff = Staff::all();
        return view('backend.staff.staff_all', compact('staff'));
    } //end 
    public function StaffStore(Request $request){
        Staff::insert([
            'email' => $request->email,
            'staff_id' => $request->staff_id,
            'phpne' => $request->phpne,
            'alt_email' => $request->alt_email,
            'mobile_phone' => $request->mobile_phone,
            'user_type' => $request->user_type,
            'passwod' => $request->passwod,
            'confirm_pass' => $request->confirm_pass,

            'created_at' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('staff.all');
    }// end method

    public function StaffEdit($id){

        $staff = Staff::findOrFail($id); 
        return view('backend.staff.staff_edit',compact('staff'));
   
       } //end method 


       public function StaffUpdate(Request $request){
        $staff_id = $request->id;

        Staff::findOrFail($staff_id)->update([
            'email' => $request->email,
            'staff_id' => $request->staff_id	,
            'phpne' => $request->phpne,
            'alt_email' => $request->alt_email,
            'mobile_phone' => $request->mobile_phone,
            'user_type' => $request->user_type,
            'passwod' => $request->passwod,
            'confirm_pass' => $request->confirm_pass,

          
            'created_at' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('staff.all');

    } //end 


public function StaffDelete($id){
    Staff::findOrFail($id)->delete(); //show data in the field 
        return redirect()->back();
      
    } //end method 


}
